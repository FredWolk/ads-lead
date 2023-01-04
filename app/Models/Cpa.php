<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cpa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    protected $casts = [
        'verticales' => 'array',
        'countries' => 'array',
        'payment_models' => 'array',
        'payment_schedule_f' => 'array',
        'payment_systems' => 'array',
    ];

}
