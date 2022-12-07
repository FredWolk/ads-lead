<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Author\StoreAuthorRequest;
use App\Http\Requests\Author\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $author = Author::all();
        return view('admin.authors.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Author\StoreAuthorRequest  $request
     */
    public function store(StoreAuthorRequest $request)
    {
        $data = $request->validated();
        $data['photo'] = Storage::disk('public')->put('/admin/images/authors', $data['photo']);
        $article = Author::firstOrCreate($data);
        if ($article) {
            return redirect()->route('author.show', $article->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     */
    public function show(Author $author)
    {
        return view('admin.authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     */
    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Author\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $data = $request->validated();
        if ($author->update($data))
            return redirect()->route('author.show', $author->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     */
    public function destroy(Author $author)
    {
        if ($author->delete())
            return redirect()->route('author.index');
    }
}
