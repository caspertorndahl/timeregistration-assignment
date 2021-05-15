<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeIndexRequest;
use App\Http\Requests\EmployeeShowRequest;
use App\Models\Employee;

class EmployeeController extends Controller{
    public function index(EmployeeIndexRequest $request){
        $employeeList = Employee::all();

        return response($employeeList, 200);
    }

    public function show(EmployeeShowRequest $request, Employee $employee){
        return response($employee, 200);
    }
}
