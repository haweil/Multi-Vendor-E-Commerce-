<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
require __DIR__ . '/dashboard.php';
require __DIR__ . '/auth.php';
