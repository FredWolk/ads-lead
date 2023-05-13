<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Trade;
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

    public function createComment(Request $request, $threads)
    {$thread
    }
}
