<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function send(Request $request, Chat $chat)
    {
        $data = $request->validate([
            'message' => 'string|required',
        ]);
        $data['chat_id'] = $chat->id;
        $data['user_id'] = Auth::id();
        $message = ChatMessage::create($data);
        if ($message)
            return redirect()->route('user.correspondence.page',
                Auth::id() === $chat->user_1 ? $chat->user_2 : $chat->user_1);
        else
            return redirect()->back();
    }

    public function delete(Chat $chat)
    {
        if ($chat->user_1 === Auth::id() || $chat->user_2 === Auth::id()) {
            if ($chat->delete()) {
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
