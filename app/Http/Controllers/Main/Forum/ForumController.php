<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ForumController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.forum.index', compact('locale'));
    }
}
