<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Show
Route::get('/', [EmployeeController::class, 'getLanding'])->name('employee.landing');
Route::get('/employee', [EmployeeController::class, 'getEmployeeDashboard'])->name('employee.page');

// Create
Route::get('/create-employee', [EmployeeController::class, 'createEmployePage'])->name('employee.createPage');
Route::post('/store-employee', [EmployeeController::class, 'storeEmployee'])->name('employee.store');

//Delete
Route::delete('/employee-destroy/{id}', [EmployeeController::class, 'destroyEmployee'])->name('employee.destroy');

//Update
Route::get('/update-page/{id}', [EmployeeController::class, 'updatePage'])->name('employee.update.page');
Route::put('/update-data/{id}', [EmployeeController::class, 'updateData'])->name('employee.update.data');

