<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Seo;
use Illuminate\Support\Facades\App;

class KnowladgeBaseController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $seo = Seo::where('page', Seo::CASES_PAGE)->first();
        if (!empty($seo)) {
            $seo->toArray();
        }
        $articles = Article::with('author')->where('active', 1)->where('type', 'base')->orderByDesc('id')->paginate(9);
        return view('main.articles.knowladge-base', compact('articles', 'seo', 'locale'));
    }
}
