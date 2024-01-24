<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trade;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $data = $request->validate([
            'thread_id' => 'integer|required',
        ]);
        $data['user_id'] = Auth::id();
        $favorite = Favorite::where('thread_id', $data['thread_id'])->where('user_id', $data['user_id'])->first();
        if (empty($favorite)) {
            $favor = Favorite::create($data);
            if ($favor) {
                $tread = Trade::firstWhere('id', $data['thread_id']);
                $user = User::firstWhere('id', $data['user_id']);
                $notif = Notification::newLike($user, $tread);
                $notif['user_id'] = $tread->user_id;
                $notif['init_user_id'] = $data['user_id'];
                $notif['init_user_photo'] = $user->photo;
                Notification::create($notif);
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
        }
        if ($favorite->delete()) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }

    }
}
