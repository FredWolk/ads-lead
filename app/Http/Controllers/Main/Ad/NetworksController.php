<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;

class NetworksController extends Controller
{
    public function __invoke()
    {
        return view('main.cpa.networks');
    }
}
