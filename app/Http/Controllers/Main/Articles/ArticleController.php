<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Article;
use App\Models\BannerAside;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class ArticleController extends Controller
{
    public function __invoke($link, ViewService $service)
    {
        $article = Article::where('link', $link)->with('author')->first();
        if (empty($article))
            return redirect()->route('articles');
        $moreArticle = Article::where('id', '!=', $article->id)->take(6)->get();
        $cookie = $service->View($article, 'article_views');
        $article->toArray();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $banner = BannerAside::where('status', 1)->where('show', 'all')->first();
        return response()->view('main.articles.article', compact('article', 'locale', 'moreArticle', 'banner'))->withCookie($cookie);
    }
}
