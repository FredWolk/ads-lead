<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Http\Controllers\Controller;
use App\Models\ArticleComments;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $comments = ArticleComments::all()->where('confirm', 0);
        return view('admin.comments.article', compact('comments'));
    }
    public function success(ArticleComments $articleComments)
    {
        $comments = $articleComments->update([
            'confirm' => 1
        ]);
        if ($comments){
            return redirect()->route('comments.article.index');
        }
    }

    public function delete(ArticleComments $articleComments)
    {
        $articleComments->delete();
        return redirect()->route('comments.article.index');
    }
}
