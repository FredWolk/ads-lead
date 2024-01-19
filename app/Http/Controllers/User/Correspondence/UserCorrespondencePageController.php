<?php

namespace App\Http\Controllers\User\Correspondence;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCorrespondencePageController extends Controller
{
    public function __invoke($id)
    {
        $user_1 = Auth::id();
        $chat = Chat::where([['user_1', '=', $user_1], ['user_2', '=', $id]])
            ->orWhere([['user_2', '=', $user_1], ['user_1', '=', $id]])
            ->with('messages')
            ->first();
        if (empty($chat)){
            $chat = Chat::create([
                'user_1' => $user_1,
                'user_2' => $id
            ]);
        }
        $info = User::firstWhere('id', $id);
        return view('user.correspondence-page', compact('chat', 'info'));
    }
}
