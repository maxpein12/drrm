<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'name',
        'username',
        'password',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
