<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\ThreadsLinks;
use App\Models\Trade;
use App\Models\TradeComment;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $links = ThreadsLinks::all();
        $themes = [];
        foreach ($links as $link) {
            $themes[$link['link']] = [
                'topik' => Trade::where('theme', $link['link'])->count(),
                'comments' => TradeComment::where('theme', $link['link'])->count(),
                'last_topik' => Trade::where('theme', $link['link'])
                    ->orderBy('created_at', 'desc')
                    ->with('author')
                    ->first()
            ];
        }
        $statistic = [
            'themes' => Trade::all()->count(),
            'comments' => TradeComment::all()->count(),
            'users' => User::all()->where('role', 'user')->count(),
            'new_user' => User::where('role', 'user')->latest('id')->with('comments')->first(),
        ];

        $newTopik = Trade::orderBy('created_at', 'desc')->with('author')->take(7)->get();
        $myTopik = Trade::where('user_id', Auth::id())->take(7)->get();
        $popularTopik = Trade::withCount('comments')->with('author')->select('id')->get();
        return view(
            'main.forum.index',
            compact('locale', 'themes', 'statistic', 'newTopik', 'myTopik', 'popularTopik')
        );
    }
}
