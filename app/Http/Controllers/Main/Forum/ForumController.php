<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\ThreadsLinks;
use App\Models\Trade;
use App\Models\TradeComment;
use Illuminate\Support\Facades\App;

class ForumController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $links = ThreadsLinks::all();
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

        return view('main.forum.index', compact('locale', 'themes'));
    }
}
