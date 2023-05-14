<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use App\Models\TradeComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'theme' => 'string|required',
            'title' => 'string|required',
            'link' => 'string|required',
            'prefix' => 'string|nullable',
            'tags' => 'array|nullable',
            'content' => 'string|required'
        ]);
        $data['user_id'] = Auth::user()->getAuthIdentifier();
        Trade::updateOrCreate($data);
        return redirect()->route('forum.threads', $data['link']);
    }

    public function createComment(Request $request, Trade $threads)
    {
        $data = $request->validate([
            'content' => 'required|string'
        ]);
        $data['theme'] = $threads->theme;
        $data['user_id'] = Auth::id();
        $data['threads_id'] = $threads->id;


        TradeComment::create($data);

        return redirect()->route('forum.board', [$threads->theme, $threads->link]);
    }
}
