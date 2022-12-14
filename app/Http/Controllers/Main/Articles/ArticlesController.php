<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $seo = Seo::where('page', Seo::ARTICLES_PAGE)->first();
        if (!empty($seo))
            $seo->toArray();
        $articles = Article::with('author')->where('type', 'article')->paginate(9);
        return view('main.articles.all-articles', compact('articles', 'seo', 'locale'));
    }
}
