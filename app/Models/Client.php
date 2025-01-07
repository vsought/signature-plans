<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fiallable = [
        'user_id',
        'document',
        'birthdate'
    ];

    protected $casts = [
        'birthdate' => 'datetime'
    ];
}
