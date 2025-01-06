<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Progress;
use Illuminate\Support\Facades\Validator;

class ProgressController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        
        $data = $request->input('data');

        foreach ($data as $item) {
            $validator = Validator::make($item, [
                'student_id' => 'required|integer',
                'disaster_id' => 'required|integer',
                'scenario_id' => 'required|integer',
                'total_attempt' => 'required|integer',
                'total_spent_time' => 'required',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['error' => 'Validation failed', 'errors' => $validator->errors()], 422);
            }
        
            try {
                $progress = new Progress();
                $progress->student_id = $item['student_id'];
                $progress->disaster_id = $item['disaster_id'];
                $progress->scenario_id = $item['scenario_id'];
                $progress->total_attempt = $item['total_attempt'];
                $progress->total_spent_time = $item['total_spent_time'];
                $progress->save();
            } catch (\Exception $e) {
                return response()->json(['error' => 'Failed to save progress', 'message' => $e->getMessage()], 500);
            }
        }
        
        return response()->json(['message' => 'Progress data inserted successfully']);
    }
}
