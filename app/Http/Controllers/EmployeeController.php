<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return $employees;
    }

     public function show($id){
        $employee=Employee::find($id)->first;
        return $employee;
     }

    public function create(Request $request){
        $employee=Employee::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "department"=>$request->department,
            "city"=>$request->city
        ]);
    }

    public function update($id,Request $request){
        $employee=Employee::find($id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "department"=>$request->department,
            "city"=>$request->city
        ]);
    }

    public function delete($id){
            $employee=Employee::find($id)->delete();
        }


}
