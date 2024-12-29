<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disaster;

class DisasterController extends Controller
{
    public function index()
    {
        $disasters = Disaster::all();
        return view('disasters.index', ['disasters' => $disasters] );
    }
}
