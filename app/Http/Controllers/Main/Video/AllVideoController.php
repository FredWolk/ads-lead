<?php

namespace App\Http\Controllers\Main\Video;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AllVideoController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $seo = Seo::where('page', Seo::VIDEOS_PAGE)->first();
        $video = Video::orderByDesk('id')->paginate(9);
        return view('main.video.all-video', compact('locale', 'seo', 'video'));
    }
}
