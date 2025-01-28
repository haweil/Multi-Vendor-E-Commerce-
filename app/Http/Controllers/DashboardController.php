<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = "Mohamed Haweil";
        return view('dashboard.index', compact('user'));
    }
}
