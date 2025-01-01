<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    protected $table = 'scenarios';

    public function disaster()
    {
        return $this->belongsTo('App\Disaster', 'disaster_id');
    }
}
