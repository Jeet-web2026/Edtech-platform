<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditadminRequest;
use App\Http\Requests\SaveadminRequest;
use App\Http\Requests\StartenrollmentRequest;
use App\Models\Admindetail;
use App\Models\StudentDetail;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function ManageDashboard(string $type): View|RedirectResponse
    {
        switch ($type) {
            case 'admins':
                $admins = User::with('adminDetails')->where('role', 'admin')
                    ->paginate(5);
                return view('dashboard.manage-admins', compact('admins'));
                break;

            case 'students':
                $students = User::where('role', 'student')
                    ->paginate(5);
                return view('dashboard.manage-students', compact('students'));
                break;

            case 'pages':
                return view('dashboard.manage-pages');
                break;

            case 'courses':
                return view('dashboard.manage-courses');
                break;

            case 'enrollments':
                $students = User::with('studentDetails')->where('role', 'user')
                    ->paginate(5);
                return view('dashboard.manage-enrollments', compact('students'));
                break;

            case 'fees':
                return view('dashboard.manage-fees');
                break;

            default:
                return view('dashboard.default');
                break;
        }
    }

    public function ManageAction(string $type, int $userId, Request $request): RedirectResponse
    {
        switch ($type) {
            case 'delete':
                $user = User::find($userId);
                if (!empty($user)) {
                    $user->delete();
                    if ($user->role === 'admin') {
                        $adminDetail = Admindetail::where('user_id', $userId)->first();

                        if ($adminDetail) {
                            if (!empty($adminDetail->profile) && file_exists(public_path('admin-profiles/' . $adminDetail->profile))) {
                                unlink(public_path('admin-profiles/' . $adminDetail->profile));
                            }
                            $adminDetail->delete();
                        }
                    } elseif ($user->role === 'user' || $user->role === 'student') {
                        $studentDetail = StudentDetail::where('user_id', $userId)->first();
                        if ($studentDetail) {
                            if (!empty($studentDetail->profile) && file_exists(public_path('student-profiles/' . $studentDetail->profile))) {
                                unlink(public_path('student-profiles/' . $studentDetail->profile));
                            }
                            $studentDetail->delete();
                        }
                    }
                    return back()->with('success', 'Data deleted successfully!');
                }
                return back()->with('error', 'Data not found!');
                break;

            case 'add':
                $user = User::find($userId);
                if (empty($user)) {
                    return back()->with('error', 'You are not authorised!');
                }
                $addType = $request->query('addType');
                return redirect()->route('add', ['userId' => $userId, 'addType' => $addType]);
                break;

            default:
                return back()->with('error', 'Something went wrong!');
                break;
        }
    }

    public function ManageAdd(int $userId, string $addType): View|RedirectResponse
    {
        switch ($addType) {
            case 'admin':
                return view('dashboard.add-admin', compact('userId'));
                break;
            case 'student':
                return view('dashboard.add-student', compact('userId'));
                break;

            default:
                return back()->with('error', 'Something went wrong!');
                break;
        }
    }

    public function AddAdmin(SaveadminRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $admin = User::create([
                    'first_name' => $this->getFirstName($request),
                    'last_name' => $this->getLastName($request),
                    'password' => bcrypt($request->input('password')),
                    'email' => $request->input('email'),
                    'role' => 'admin',
                ]);

                Admindetail::create([
                    'user_id' => $admin->id,
                    'mob' => $request->input('mob'),
                    'aadhaar' => $request->input('aadhaar'),
                    'parent_id' => $request->input('parent_id'),
                    'profile' => $this->uploadProfile($request),
                    'valid_from' => $request->input('valid_from'),
                    'valid_to' => $request->input('valid_to'),
                    'address' => $request->input('address'),
                ]);
            });

            return back()->with('success', 'Admin created successfully!');
        } catch (\Throwable $th) {
            Log::error('Admin creation failed', [
                'error' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);

            return back()->with('error', 'Something went wrong while creating admin.');
        }
    }

    protected function uploadProfile($request): ?string
    {
        if ($request->hasFile('profile')) {
            return $request->file('profile')->store('admin-profiles', 'public');
        }
        return null;
    }

    protected function getFirstName($request): string
    {
        $fullName = trim($request->input('name'));
        $parts = preg_split('/\s+/', $fullName);

        return $parts[0] ?? '';
    }

    protected function getLastName($request): string
    {
        $fullName = trim($request->input('name'));
        $parts = preg_split('/\s+/', $fullName);

        return count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';
    }

    public function ChangeStatus(string $type, int $id): RedirectResponse
    {
        switch ($type) {
            case 'admin':
                $admin = User::find($id);
                if (!empty($admin) && $admin->role === 'admin') {
                    $admin->is_active = $admin->is_active == 1 ? 0 : 1;
                    $admin->save();
                    return back()->with('success', 'Status changed successfully!');
                }
                return back()->with('error', 'Admin not found!');
                break;

            default:
                return back()->with('error', 'Something went wrong!');
                break;
        }
    }

    public function EditAdmin(int $id): View|RedirectResponse
    {
        $admin = User::with('adminDetails')->find($id);
        if (!empty($admin) && $admin->role === 'admin') {
            return view('dashboard.edit-admin', compact('admin'));
        }
        return back()->with('error', 'Admin not found!');
    }

    public function updateAdmin(EditadminRequest $request, int $userid, int $adminid): RedirectResponse
    {
        try {
            User::where('id', $userid)->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
            ]);
            Admindetail::where('id', $adminid)->update([
                'aadhaar' => $request->input('aadhaar'),
                'mob' => $request->input('mob'),
                'valid_from' => $request->input('valid_from'),
                'valid_to' => $request->input('valid_to'),
                'address' => $request->input('address')
            ]);
            return back()->with('success', 'Data updated successfully!');
        } catch (\Throwable $th) {
            Log::error('Admin creation failed', [
                'error' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function EnrollmentStart(StartenrollmentRequest $request): RedirectResponse
    {
        try {
            $user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('mob'),
                'is_active' => 0,
                'role' => 'user'
            ]);

            $studentdetail = StudentDetail::create([
                'user_id' => $user->id,
                'parent_id' => $request->input('parent_id'),
                'contact_number' => $request->input('mob'),
                'last_qualification' => $request->input('last_qualification'),
                'last_qualification_organisation_name' => $request->input('last_qualification_organisation'),
                'class_xth_percentage' => $request->input('class_tenth_percentage'),
                'class_xth_organisation_name' => $request->input('class_tenth_organisation_name'),
                'class_xiith_percentage' => $request->input('class_twelveth_percentage'),
                'class_xiith_organisation_name' => $request->input('class_twelveth_organisation_name'),
            ]);

            return redirect()->route('student.additional-details', $studentdetail->id)->with('success', 'Student primary details saved!');
        } catch (\Throwable $th) {
            Log::error('Student creation failed', [
                'error' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function Studentadditionaldetails(int $id): View
    {
        $studtid = $id;
        return view('dashboard.student-additional-details', compact('studtid'));
    }

    public function ViewStudentDetails(int $id): View|RedirectResponse
    {
        $student = User::with('studentDetails')->find($id);
        if (!empty($student) && $student->role === 'user') {
            return view('dashboard.view-student-details', compact('student'));
        }
        return back()->with('error', 'Student not found!');
    }

    public function EditStudentDetails(int $id): View|RedirectResponse
    {
        $student = User::with('studentDetails')->find($id);
        if (!empty($student) && $student->role === 'user') {
            return view('dashboard.edit-student-details', compact('student'));
        }
        return back()->with('error', 'Student not found!');
    }
}
