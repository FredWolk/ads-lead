<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;

class ForumBoardController extends Controller
{
    public function __invoke()
    {
        return view('main.forum.board');
    }
}
