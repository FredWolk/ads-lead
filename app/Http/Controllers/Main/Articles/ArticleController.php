<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Article;
use App\Models\ArticleSeoTags;
use App\Models\BannerAside;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class ArticleController extends Controller
{
    public function __invoke($link, ViewService $service)
    {
        $tags = ArticleSeoTags::all();
        $tagArr = [];
        $tags->each(function ($e) use (&$tagArr){
            $tagArr[$e->tag_name] = $e->link;
        });
        $article = Article::where('link', $link)->where('active', 1)->with('author')->with('comments')->first();
        if (empty($article))
            return redirect()->route('articles');
        $moreArticle = Article::where('id', '!=', $article->id)->where('active', 1)->take(6)->inRandomOrder()->get();
        $cookie = $service->View($article, 'article_views');
        $article->toArray();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $banner = BannerAside::where('status', 1)->where('show', 'all')->first();
        return response()->view('main.articles.article', compact('article', 'locale', 'moreArticle', 'banner', 'tagArr'))->withCookie($cookie);
    }
}
