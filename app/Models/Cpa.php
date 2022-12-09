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
        'verticales_id' => 'array',
        'countries_id' => 'array',
        'payment_models_id' => 'array',
        'payment_schedule_id' => 'array',
        'payment_systems_id' => 'array',
    ];

}
