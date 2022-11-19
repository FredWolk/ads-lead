<?php

namespace App\Http\Controllers\Main\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        return view('blog.blog');
    }
}
