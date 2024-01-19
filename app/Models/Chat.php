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
}
