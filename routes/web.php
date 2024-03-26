<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/colaboradores', function () {
        return view('employees/employees-view');
    })->name('employees');

    Route::get('/planilla', function () {
        return view('employees/weekly-payout-view');
    })->name('weekly-payout');
});
