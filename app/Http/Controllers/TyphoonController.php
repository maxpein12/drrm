<?php

namespace App\Http\Controllers;
use App\Models\Scenario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TyphoonController extends Controller
{
    public function index()
    {
        $scenario1 = Scenario::where('id', 1);
        $scenario2 = Scenario::where('id', 2);
        $scenario3 = Scenario::where('id', 3);
        $scenario4 = Scenario::where('id', 4);
        $scenario5 = Scenario::where('id', 5);
        $scenario6 = Scenario::where('id', 6);
        $scenario7 = Scenario::where('id', 7);
        $scenario8 = Scenario::where('id', 8);

        return view('disasters.typhoon.scenario1', ['scenario1' => $scenario1, 'scenario2' => $scenario2, 'scenario3' => $scenario3, 'scenario4' => $scenario4, 'scenario5' => $scenario5, 'scenario6' => $scenario6, 'scenario7' => $scenario7, 'scenario8' => $scenario8]);
    }
}
