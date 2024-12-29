<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('username');
        $student->section_id = $request->input('section');
        $student->password = bcrypt($request->input('password1'));
        $student->role_id = 1; // default role_id
        $student->save();

        return redirect()->route('student.login');
    }
}
