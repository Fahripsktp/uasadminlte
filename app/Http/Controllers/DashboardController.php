<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard.dashboardlte');
    }

    public function admin()
    {
        return view('admin.admin');
    }
}
