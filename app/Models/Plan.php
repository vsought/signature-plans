<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fiallable = [
        'name',
        'short_description',
        'price'
    ];

    public function signatures() {
        return $this->hasMany(Signature::class);
    }
}
