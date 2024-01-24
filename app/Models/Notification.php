<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = false;

    public static function newLike($user, $trade)
    {
        return [
            'title' => 'New like',
            'message' => "User <a target='_blank' href='".
                route('user.correspondence.page', $user->id)
                ."'>$user->name</a> has liked <a target='_blank' href='".
                route('forum.board', [$trade->theme, $trade->link])
                ."'>your post</a>"
        ];
    }
    public static function newComment($trade)
    {
        return [
            'title' => 'New reply',
            'message' => "You have a new reply in the <a target='_blank' href='".
                route('forum.board', [$trade->theme, $trade->link]) ."'>track</a>"
        ];
    }

    public static function newMessage($user)
    {
        return [
            'title' => 'New message',
            'message' => "New message from user <a target='_blank' href='".
                route('user.correspondence.page', $user->id)
                ."'>$user->name</a>"
        ];
    }

    public static function newSubscriber($user)
    {
        return [
            'title' => 'New subscriber',
            'message' => "User <a target='_blank' href='". route('user.correspondence.page', $user->id) ."'>$user->name</a> has subscribed to you"
        ];
    }

    public static function newPost($trade)
    {
        return [
            'title' => 'New trade',
            'message' => "New message in <a target='_blank' href='".
                route('forum.board', [$trade->theme, $trade->link]) ."'>topic of track</a>"
        ];
    }
}
