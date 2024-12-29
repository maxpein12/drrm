<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'section',
        'password',
        'role_id',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
