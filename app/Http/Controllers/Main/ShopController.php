<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        $category = ShopCategory::with('shops')->get();
        return view('main.shop', compact('category'));
    }
}
