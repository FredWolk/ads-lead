<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $casts = [
        'tags' => 'array'
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withCount('comments');
    }

    public function comments()
    {
        return $this->hasMany(TradeComment::class, 'threads_id', 'id');
    }

    public function last()
    {
        $lastComment = TradeComment::where('threads_id', 'id')->orderBy('created_at', 'desc')->select('user_id')->first(
        );
        if (!empty($lastComment)) {
            return User::first($lastComment);
        }
    }
}
