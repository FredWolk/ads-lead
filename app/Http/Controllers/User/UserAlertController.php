<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAlertController extends Controller
{
    public function __invoke()
    {
        $notification = Notification::where('user_id', Auth::id())->paginate(30);
        $new = Notification::where('user_id', Auth::id())->where('read', 0)->count();
        return view('user.alert', compact('notification', 'new'));
    }

    public function readNotification()
    {
        $new = Notification::where('user_id', Auth::id())->where('read', 0)->get();
        $new->each(function ($e){
           $e->update([
               'read' => 1
           ]);
        });
    }
}
