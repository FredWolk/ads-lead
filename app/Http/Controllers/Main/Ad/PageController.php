<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        return view('main.ad.page');
    }
}
