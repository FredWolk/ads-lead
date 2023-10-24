<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleSeoTags\StoreArticleSeoTagsRequest;
use App\Http\Requests\ArticleSeoTags\UpdateArticleSeoTagsRequest;
use App\Models\Article;
use App\Models\ArticleSeoTags;

class ArticleSeoTagsController extends Controller
{
    public function index()
    {
        $article_tags = ArticleSeoTags::all();
        return view('admin.article-tags.index', compact('article_tags'));
    }

    public function create()
    {
        $article = Article::select('tags')->get();
        $all_tags = [];
        if (!empty($article)) {
            foreach ($article->toArray() as $article) {
                foreach ($article as $tags) {
                    if (!empty($tags)) {
                        foreach ($tags as $tag) {
                            if (!in_array($tag, $all_tags)) {
                                $all_tags[] = $tag;
                            }
                        }
                    }
                }
            }
        }
        return view('admin.article-tags.create', compact('all_tags'));
    }

    public function store(StoreArticleSeoTagsRequest $request)
    {
        $data = $request->validated();
        $tag = ArticleSeoTags::firstOrCreate([
            'tag_name' => $data['tag_name']
        ], $data);
        if ($tag)
            return redirect()->route('article-tags.show', $tag->id);
    }

    public function show(ArticleSeoTags $article_tag)
    {
        return view('admin.article-tags.show', compact('article_tag'));
    }

    public function edit(ArticleSeoTags $article_tag)
    {
        $article = Article::select('tags')->get();
        $all_tags = [];
        if (!empty($article)) {
            foreach ($article->toArray() as $article) {
                foreach ($article as $tags) {
                    if (!empty($tags)) {
                        foreach ($tags as $tag) {
                            if (!in_array($tag, $all_tags)) {
                                $all_tags[] = $tag;
                            }
                        }
                    }
                }
            }
        }
        return view('admin.article-tags.edit', compact('article_tag', 'all_tags'));
    }

    public function update(UpdateArticleSeoTagsRequest $request, ArticleSeoTags $article_tag)
    {
        $data = $request->validated();
        $article_tag->update($data);
        return redirect()->route('article-tags.show', $article_tag->id);
    }

    public function destroy(ArticleSeoTags $article_tag)
    {
        $article_tag->delete();
        return redirect()->route('article-tags.index');
    }
}
