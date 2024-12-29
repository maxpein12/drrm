<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function index()
    {
       return view('disasters.index');
    }
}
