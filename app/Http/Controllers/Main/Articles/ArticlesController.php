<?php

namespace App\Http\Controllers\Main\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleSeoTags;
use App\Models\Author;
use App\Models\CategoryArticles;
use App\Models\Seo;
use Illuminate\Support\Facades\App;

class ArticlesController extends Controller
{
    public function index()
    {
        $tags = ArticleSeoTags::all();
        $tagArr = [];
        $tags->each(function ($e) use (&$tagArr){
            $tagArr[$e->tag_name] = $e->link;
        });
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $seo = Seo::where('page', Seo::ARTICLES_PAGE)->first();
        if (!empty($seo)) {
            $seo->toArray();
        }
        $category = CategoryArticles::all();
        $articles = Article::with('author')->where('active', 1)->where('type', 'article')->orderByDesc('id')->paginate(9);
        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('articles');
        }
        return view('main.articles.all-articles', compact('articles', 'seo', 'locale', 'tagArr', 'category'));
    }

    public function author($link)
    {
        $tags = ArticleSeoTags::all();
        $tagArr = [];
        $tags->each(function ($e) use (&$tagArr){
            $tagArr[$e->tag_name] = $e->link;
        });
        $author = Author::firstWhere('link', $link);
        if (empty($author)){
            return redirect()->route('articles');
        }
        $articles = Article::with('author')->where('author_id', $author->id)->where('active', 1)->orderByDesc('id')->paginate(9);
        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('article.author', $link);
        }
        return view('main.articles.author-articles', compact('articles', 'author', 'tagArr'));
    }

    public function tag($link)
    {
        $tags = ArticleSeoTags::all();
        $tagArr = [];
        $tags->each(function ($e) use (&$tagArr){
           $tagArr[$e->tag_name] = $e->link;
        });
        $tag = $tags->firstWhere('link', $link);
        if (empty($tag)){
            return redirect()->route('articles');
        }

        $articles = Article::with('author')
            ->whereJsonContains('tags', $tag->tag_name)
            ->where('active', 1)
            ->orderByDesc('id')->paginate(9);

        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('article.tag', $link);
        }
        return view('main.articles.tags-articles', compact('articles', 'tag', 'tagArr'));
    }
    public function category($link)
    {
        $tag = CategoryArticles::firstWhere('name', $link);
        if (empty($tag)){
            return redirect()->route('articles');
        }

        $articles = Article::with('author')
            ->where('category', $tag->name)
            ->where('active', 1)
            ->orderByDesc('id')->paginate(9);

        if (!empty($_GET['page']) && $articles->lastPage() < $_GET['page']) {
            return redirect()->route('article.tag', $link);
        }
        return view('main.articles.category-articles', compact('articles', 'tag'));
    }

}
