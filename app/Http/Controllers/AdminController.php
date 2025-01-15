<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->role_id = 2;
        $admin->name = $request->input('name');
        $admin->username = $request->input('name');
        $admin->password = bcrypt($request->input('password1'));
        $admin->save();

        return redirect()->route('admin.login');
    }   

}
