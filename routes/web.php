<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Show
Route::get('/', [EmployeeController::class, 'getLanding'])->name('employee.landing');
Route::get('/employee', [EmployeeController::class, 'getEmployeeDashboard'])->name('employee.page');

// Create
Route::get('/create-employee', [EmployeeController::class, 'createEmployePage'])->name('employee.createPage');
Route::post('/store-employee', [EmployeeController::class, 'storeEmployee'])->name('employee.store');

