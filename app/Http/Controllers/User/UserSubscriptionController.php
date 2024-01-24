<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSubscriptionController extends Controller
{
    public function index()
    {
        $imSubscribed = Subscribe::where('user_id', Auth::id())->with('im')->get();
        $mySubscribers = Subscribe::where('author_id', Auth::id())->with('my')->get();
        return view('user.subscription', compact('imSubscribed', 'mySubscribers'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'author_id' => 'integer|required'
        ]);
        $data['user_id'] = Auth::id();
        $subscribe = Subscribe::where('author_id', $data['author_id'])->where('user_id', $data['user_id'])->first();
        if (!empty($subscribe)) {
            if ($subscribe->delete()) {
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
        } else {
            $sub = Subscribe::create($data);
            $user = User::firstWhere('id', $data['user_id']);
            $notif = Notification::newSubscriber($user);
            $notif['user_id'] = $data['author_id'];
            $notif['init_user_id'] = $data['user_id'];
            $notif['init_user_photo'] = $user->photo;
            Notification::create($notif);
            if ($sub) {
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
        }

    }
}
