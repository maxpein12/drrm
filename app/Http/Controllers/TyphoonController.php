<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Scenario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class TyphoonController extends Controller
{
    public function index()
{
    dd(Auth::id());
    $students = Student::all(); // Retrieve all students
    $scenario1 = Scenario::where('id', 1)->first();
    $scenario2 = Scenario::where('id', 2)->first();
    $scenario3 = Scenario::where('id', 3)->first();
    $scenario4 = Scenario::where('id', 4)->first();
    $scenario5 = Scenario::where('id', 5)->first();
    $scenario6 = Scenario::where('id', 6)->first();
    $scenario7 = Scenario::where('id', 7)->first();
    $scenario8 = Scenario::where('id', 8)->first();

    // You can access the id property of a student like this:
    // $studentId = $students->first()->id;

    $loggedInUserId = session('logged_in_user_id');

    return view('disasters.typhoon.scenario1', [
        'scenario1' => $scenario1,
        'scenario2' => $scenario2,
        'scenario3' => $scenario3,
        'scenario4' => $scenario4,
        'scenario5' => $scenario5,
        'scenario6' => $scenario6,
        'scenario7' => $scenario7,
        'scenario8' => $scenario8,
        'loggedInUserId' => $loggedInUserId, 
        
    ]);
}
}
