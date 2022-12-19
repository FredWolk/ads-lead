<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;

class ForumThreadsController extends Controller
{
    public function __invoke()
    {
        return view('main.forum.threads');
    }
}
