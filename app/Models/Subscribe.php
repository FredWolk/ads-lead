<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function im()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function my()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
