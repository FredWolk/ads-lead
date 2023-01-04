<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Cpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function __invoke($link, ViewService $service)
    {
        $cpa = Cpa::where('link', $link)->with('author')->first();
        if (empty($article))
            return redirect()->route('articles');
        $moreCpa = Cpa::where('id', '!=', $article->id)->take(6)->get();
        $cookie = $service->View($article, 'cpa_views');
        $article->toArray();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return response()->view('main.cpa.page', compact('cpa', 'locale', 'moreCpa'))->withCookie($cookie);
    }
}
