<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($link)
    {
        $article = Article::where('link', $link)->first();
        if (empty($article))
            return redirect()->route('articles');
        return view('main.articles.article', compact('article'));
    }
}
