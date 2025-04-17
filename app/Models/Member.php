<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'gender', 
        'birthday', 
        'status_active'
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

    protected $dates = ['deleted_at'];
}
