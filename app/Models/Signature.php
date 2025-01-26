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

    public function plan() {
        return $this->belongsTo(Plan::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function clients() {
        return $this->belongsTo(Client::class);
    }

    public function signature_histories() {
        return $this->hasMany(SignatureHistory::class);
    }
}
