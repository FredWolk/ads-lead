<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Articles\StoreRequest;
use App\Http\Requests\Articles\UpdateRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $article = Article::all();
        return view('admin.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/Admin/images', $data['image']);
        $article = Article::firstOrCreate($data);
        if ($article) {
            return redirect()->route('article.show', $article->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article $article
     */
    public function update(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();
        if ($article->update($data))
            return redirect()->route('article.show', $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     */
    public function destroy(Article $article)
    {
        if ($article->delete())
            return redirect()->route('article.index');
    }
}
