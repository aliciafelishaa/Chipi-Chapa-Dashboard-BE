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
    public function storeEmployee(Request $request){
        $request->validate([
            'employee_name'=> 'required|max: 255',
            'employee_age'=> 'required|min:20|numeric',
            'employee_address'=> 'required|max: 255',
            'employee_phonenumber' => ['required', 'regex:/^08[0-9]{8,13}$/'],
        ],
        ['employee_phonenumber.regex' => 'Nomor telepon harus dimulai dengan "08" dan berisi 10-15 digit angka.',
        ]);

        // dd($request);

        Employee::create([
            'employee_name'=> $request['employee_name'],
            'employee_age'=> $request['employee_age'],
            'employee_address'=> $request['employee_address'],
            'employee_phonenumber'=> $request['employee_phonenumber'],
        ]);

        // Redirect ke halaman employee
        return redirect()->route('employee.page')->with('success', 'Data karyawan berhasil disimpan!');
    }


    public function destroyEmployee($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.page');
    }

    public function updatePage($id){
        $employeeUpdate = Employee::find($id);
        return view('employeeUpdate', compact('employeeUpdate'));
    }

    public function updateData(Request $request, $id){
        $request->validate([
            'employee_name'=> 'required|max: 255',
            'employee_age'=> 'required|min:20|numeric',
            'employee_address'=> 'required|max: 255',
            'employee_phonenumber' => ['required', 'regex:/^08[0-9]{8,13}$/'],
        ],
        ['employee_phonenumber.regex' => 'Nomor telepon harus dimulai dengan "08" dan berisi 10-15 digit angka.',
        ]);

        $employeeUpdate = Employee::find($id);

        if(!$employeeUpdate){
            return redirect()->route('employee.page')->with('error', 'Employee not found');
        }

        $employeeUpdate->update([
            'employee_name'=> $request['employee_name'],
            'employee_age'=> $request['employee_age'],
            'employee_address'=> $request['employee_address'],
            'employee_phonenumber'=> $request['employee_phonenumber'],
        ]);

        return redirect()->route('employee.page')->with('success', 'Data Updated');
    }
}
