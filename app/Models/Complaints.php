<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function trades()
    {
        return $this->hasOne(Complaints::class, 'id', 'trade_id');
    }
}
