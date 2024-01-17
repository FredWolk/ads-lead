<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFavoriteController extends Controller
{
    public function __invoke()
    {
        $favorite = Favorite::where('user_id', Auth::id())->with('thread')->paginate(20);
        return view('user.favorite', compact('favorite'));
    }
}
