<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = [
        'student_id',
        'disaster_id',
        'scenario_id',
        'total_attempt',
        'total_spent_time',
    ];
}
