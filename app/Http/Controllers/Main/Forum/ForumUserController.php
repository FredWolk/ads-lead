<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;

class ForumUserController extends Controller
{
    public function __invoke()
    {
        return view('main.forum.user');
    }
}
