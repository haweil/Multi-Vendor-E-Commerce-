<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = "Mohamed Haweil";
        return view('dashboard.index', compact('user'));
    }
}
