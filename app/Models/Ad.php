<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    protected $casts = [
        'advertising_formats' => 'array',
        'countries' => 'array',
        'payment_systems' => 'array',
        'minimum_top_up_amount' => 'array'
    ];

    public function comments()
    {
        return $this->hasMany(AdvComments::class, 'ad_id', 'id')->with('author')->where('confirm', 1);
    }
}
