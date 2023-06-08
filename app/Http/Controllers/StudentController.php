<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function Register(Request $request){
        $fields=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email'],
            'password'=>['required','min:10']

        ]);
        $fields['password']=bcrypt($fields['password']);
        Student::create($fields);
        return "make register done";
    }
}
