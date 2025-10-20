<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function ManageAdmins()
    {
        $admins = User::where('type', 'admin')
        ->paginate(5);
        return view('dashboard.manage-admins', compact('admins'));
    }
}
