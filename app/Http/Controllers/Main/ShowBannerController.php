<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowBannerController extends Controller
{
    public function views(Request $request)
    {
        $data = $request->only('arr');
        if (!empty($data['arr'])){
            foreach ($data['arr'] as $banner){
                dd($banner);
            }
        }
    }
}
