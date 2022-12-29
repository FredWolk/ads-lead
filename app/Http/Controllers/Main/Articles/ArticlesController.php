<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __invoke()
    {
        $articles = Article::paginate(1);
        return view('main.articles.all-articles', compact('articles'));
    }
}
