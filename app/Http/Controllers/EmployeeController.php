<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function getLanding(){
        return view('welcome');
    }
    public function getEmployeeDashboard(){
        $employeeList= Employee::all();
        return view('employeeList', compact('employeeList'));
    }
    public function createEmployePage(){
        return view('employeeCreate');
    }
}
