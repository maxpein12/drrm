<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
    
        // dd($name, $password); // add this line to see the input values
    
        $admin = Admin::where('name', $name)->first();
    
        // // dd($password); // add this line to see if the student is found
        // $hashedPassword = $admin->password;
        // $hashedPasswordFromDB = bcrypt($password); // hash the password from the request
        // dd($hashedPassword, $hashedPasswordFromDB);
    
        if ($admin && Hash::check($password, $admin->password)) {
            session(['logged_in_user' => $admin->name, 'logged_in_user_id' => $admin->id]);
            // dd(session('logged_in_user_id')); // add this line to check the value
            return redirect()->route('admin.index');
        }
    
        return redirect()->back()->withErrors(['Invalid credentials']);
    }
}
