<?php

namespace App\Http\Controllers\Main\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __invoke()
    {
        return view('main.video.video');
    }
}
