<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ForumCreateThreadsController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.forum.create-threads', compact('locale'));
    }
}
