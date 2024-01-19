<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function messages()
    {
        return $this->hasMany(ChatMessage::class, 'chat_id', 'id');
    }

    public function userOne()
    {
        return $this->hasOne(User::class, 'id', 'user_1');
    }
    public function userTwo()
    {
        return $this->hasOne(User::class, 'id', 'user_2');
    }

    public function lastComment()
    {
        return $this->hasOne(ChatMessage::class, 'chat_id', 'id')->latest('id');
    }
}
