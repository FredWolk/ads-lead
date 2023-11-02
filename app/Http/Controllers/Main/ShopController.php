<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        $category = ShopCategory::with('shops')->get();
        $seo = Seo::where('page', Seo::SHOP_PAGE)->get();
        return view('main.shop', compact('category', 'seo'));
    }
}
