<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:adminuser']);
    }

    public function index()
    {
        return view('adminuser.dashboard');
    }
}
