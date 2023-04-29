<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ForumCreateThreadsController extends Controller
{
    public function __invoke($link)
    {
        $user = Auth::user();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.forum.create-threads', compact('locale', 'user', 'link'));
    }
}
