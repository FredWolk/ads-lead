<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __invoke()
    {
       return view('main.ad.catalog');
    }
}
