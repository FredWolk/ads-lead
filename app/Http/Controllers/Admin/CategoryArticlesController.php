<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryArticles\StoreCategoryArticlesRequest;
use App\Http\Requests\CategoryArticles\UpdateCategoryArticlesRequest;
use App\Models\CategoryArticles;

class CategoryArticlesController extends Controller
{
    public function index()
    {
        $category = CategoryArticles::all();
        return view('admin.articles-category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.articles-category.create');
    }
    public function store(StoreCategoryArticlesRequest $request)
    {
        $data = $request->validated();
        $category = CategoryArticles::create($data);
        return redirect()->route('article-category.show', $category->id);
    }
    public function show(CategoryArticles $article_category)
    {
        return view('admin.articles-category.show', compact('article_category'));
    }
    public function edit(CategoryArticles $article_category)
    {
        return view('admin.articles-category.edit', compact('article_category'));
    }
    public function update(UpdateCategoryArticlesRequest $request, CategoryArticles $article_category)
    {
        $data = $request->validated();
        $article_category->update($data);
        return redirect()->route('article-category.show', $article_category->id);
    }
    public function destroy(CategoryArticles $article_category)
    {
        $article_category->delete();
        return redirect()->route('article-category.index');
    }
}
