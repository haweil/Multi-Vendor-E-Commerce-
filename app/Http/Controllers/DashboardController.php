<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Return response:view,json,redirect
        return view('dashboard');
    }
}
