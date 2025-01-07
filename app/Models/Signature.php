<?php

namespace App\Models;

use app\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fiallable = [
        'client_id',
        'plan_id',
        'status'
    ];

    protected $casts = [
        'status' => SignatureStatus::class
    ];
}
