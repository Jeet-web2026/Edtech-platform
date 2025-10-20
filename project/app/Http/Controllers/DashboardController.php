<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function ManageDashboard(string $type): View
    {
        switch ($type) {
            case 'admins':
                $admins = User::where('type', 'admin')
                    ->paginate(5);
                return view('dashboard.manage-admins', compact('admins'));
                break;

            case 'students':
                $students = User::where('type', 'user')
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
                return view('dashboard.manage-enrollments');
                break;

            case 'fees':
                return view('dashboard.manage-fees');
                break;

            default:
                return view('dashboard.default');
                break;
        }
    }

    public function ManageAction(string $type, int $userId): RedirectResponse
    {
        switch ($type) {
            case 'delete':
                $user = User::findOrFail($userId);
                if (!empty($user)) {
                    $user->delete();
                    return back()->with('success', 'Data deleted successfully!');
                }
                return back()->with('error', 'Data not found!');
                break;

            default:
                return back()->with('error', 'Something went wrong!');
                break;
        }
    }
}
