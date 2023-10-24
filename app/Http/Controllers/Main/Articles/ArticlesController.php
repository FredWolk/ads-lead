<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Seo;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{
    public function index()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $seo = Seo::where('page', Seo::ARTICLES_PAGE)->first();
        if (!empty($seo)) {
            $seo->toArray();
        }
        $articles = Article::with('author')->where('active', 1)->where('type', 'article')->orderByDesc('id')->paginate(9);
        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('articles');
        }
        return view('main.articles.all-articles', compact('articles', 'seo', 'locale'));
    }

    public function author($link)
    {
        $author = Author::firstWhere('link', $link);
        if (empty($author)){
            return redirect()->route('articles');
        }
        $articles = Article::with('author')->where('author_id', $author->id)->where('active', 1)->orderByDesc('id')->paginate(9);
        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('article.author', $link);
        }
        return view('main.articles.author-articles', compact('articles', 'author'));
    }
}
