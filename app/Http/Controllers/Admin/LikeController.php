<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $data = $request->validate([
            'link' => 'string|required',
            'title' => 'string|required',
            'text' => 'string|required',
            'user_name' => 'string|required',
            'user_photo' => 'string|required',
        ]);
        $data['user_id'] = Auth::id();
        $favorite = Favorite::where('link', $data['link'])->where('user_id', $data['user_id'])->first();
        if (empty($favorite)) {
            $favor = Favorite::create($data);
            if ($favor) {
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
