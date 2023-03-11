<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ArticleComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendCommentController extends Controller
{
    public function articleComment(Request $request)
    {
        $data = $request->validate([
            'comment' => 'string|required',
            'id' => 'integer|required'
        ]);
        $user_id = Auth::user()->getAuthIdentifier();

        $model = ArticleComments::create([
            'user_id' => $user_id,
            'text' => $data['comment'],
            'article_id' => $data['id'],
            'confirm' => 0,
        ]);

        if ($model){
            return response()->json(['status' => true])->setStatusCode(200);
        } else {
            return response()->json(['status' => false])->setStatusCode(500);
        }

    }
    public function cpaComment(Request $request)
    {

    }
    public function adComment(Request $request)
    {

    }
}
