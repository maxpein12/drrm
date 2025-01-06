<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
    
        // dd($name, $password); // add this line to see the input values
    
        $student = Student::where('name', $name)->first();
    
        // dd($student); // add this line to see if the student is found
    
        if ($student && Hash::check($password, $student->password)) {
            session(['logged_in_user' => $student->name, 'logged_in_user_id' => $student->id]);
            // dd(session('logged_in_user_id')); // add this line to check the value
            return redirect()->route('disasters.index');
        }
    
        return redirect()->back()->withErrors(['Invalid credentials']);
    }
}
