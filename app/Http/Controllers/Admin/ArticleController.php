<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Articles\StoreRequest;
use App\Http\Requests\Articles\UpdateRequest;
use App\Models\Article;
use App\Models\Author;
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
        $article = Article::orderBy('id', 'desc')->paginate(20);
        return view('admin.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $authors = Author::all();
        return view('admin.articles.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/admin/images/article', $data['image']);
        }
        if (!empty($data['pt_image'])) {
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/article', $data['pt_image']);
        }
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
        $authors = Author::all();
        return view('admin.articles.edit', compact('article', 'authors'));
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
        if (!empty($data['image'])) {
            if (!empty($article->image)) {
                Storage::disk('public')->delete($article->image);
            }
            $data['image'] = Storage::disk('public')->put('/admin/images/article', $data['image']);
        }
        if (!empty($data['pt_image'])) {
            if (!empty($article->pt_image)) {
                Storage::disk('public')->delete($article->pt_image);
            }
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/article', $data['pt_image']);
        }

        $result = $article->update($data);
        if ($result)
            $changes = $article->getChanges();
            if (!empty($changes['active']) && $changes['active'] === true){
                $article->update(['created_at' => date('Y-m-d H:i:s')]);
            }
            return redirect()->route('article.show', $article->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     */
    public function destroy(Article $article)
    {
        if (!empty($article->image)) {
            Storage::disk('public')->delete($article->image);
        }
        if (!empty($article->pt_image)) {
            Storage::disk('public')->delete($article->pt_image);
        }
        if ($article->delete()) {
            return redirect()->route('article.index');
        }
    }
}
