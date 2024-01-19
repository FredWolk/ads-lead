<?php

namespace App\Http\Controllers\User\Correspondence;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCorrespondenceController extends Controller
{
    public function __invoke()
    {
        $chats = Chat::where('user_1', Auth::id())
            ->orWhere('user_2', Auth::id())
            ->with('userOne')->with('userTwo')->withCount('messages')
            ->paginate(20);
        return view('user.correspondence', compact('chats'));
    }
}
