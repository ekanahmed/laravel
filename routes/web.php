<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees', [
    EmployeeController::class,"index"

]);

Route::post('/employees', [
    EmployeeController::class,"create"

]);
Route::get('/employees/{id}', [
    EmployeeController::class,"show"

]);
