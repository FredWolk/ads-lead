<?php

namespace App\Http\Controllers\Main\Video;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VideoController extends Controller
{
    public function __invoke($link)
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $video = Video::where('link', $link)->first();
        if (empty($video))
            return redirect()->route('video');
        else
            $video->toArray();
        $banner = BannerAside::where('status', 1)->where('show', 'all')->first();
        $moreVideo = Video::all()->where('id', '!=', $video['id'])->take(6)->toArray();
        return view('main.video.video', compact('locale', 'video', 'banner', 'moreVideo'));
    }
}
