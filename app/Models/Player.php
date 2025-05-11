<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'role',
        'hobby',
        'rank',
        'description',
    ];

    protected $table = 'table_of_players';
}
