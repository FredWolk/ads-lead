<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {
        return view('articles.article');
    }
}
