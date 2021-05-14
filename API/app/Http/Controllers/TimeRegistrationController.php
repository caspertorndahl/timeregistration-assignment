<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeRegistrationIndexRequest;
use App\Models\Employee;

class TimeRegistrationController extends Controller{
    public function index(TimeRegistrationIndexRequest $request, Employee $employee){
        return response($employee->timeRegistrationList, 200);
    }
}
