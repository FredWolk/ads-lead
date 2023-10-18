<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Seo;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{
    public function __invoke()
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
}
