<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function thread()
    {
        return $this->hasOne(Trade::class, 'id', 'thread_id')->with('author');
    }
}
