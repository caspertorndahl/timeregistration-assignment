<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TimeRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{employee}/timeregistration', [TimeRegistrationController::class, 'index']);
