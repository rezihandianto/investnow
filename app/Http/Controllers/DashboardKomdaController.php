<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKomdaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:komda']);
    }

    public function index()
    {
        return view('komda.dashboard');
    }
}
