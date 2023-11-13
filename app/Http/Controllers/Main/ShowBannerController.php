<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ShowBanner;
use http\Cookie;
use Illuminate\Http\Request;

class ShowBannerController extends Controller
{

    public array $banner_name = [
        'header_button' => 'Кнопка в шапке',
        'big_top_banner' => 'Большой баннер',
        'popup_banner' => 'Попап баннер',
        'aside_banner' => 'Маленький баннер',
        'forum_banner' => 'Баннер на форуме'
    ];

    public function views(Request $request)
    {
        $data = $request->only('arr');
        if (!empty(\Illuminate\Support\Facades\Cookie::get('show')))
            $cookies = json_decode(\Illuminate\Support\Facades\Cookie::get('show'), 1);
        if (!empty($data['arr'])) {
            foreach ($data['arr'] as $banner) {
                if (!empty($cookies)){
                    if (!in_array($banner, $cookies)) {
                        $show = ShowBanner::firstWhere('banner', $this->banner_name[$banner]);
                        if (empty($show)) {
                            ShowBanner::create([
                                'banner' => $this->banner_name[$banner],
                                'views' => 1,
                                'clicks' => 0
                            ]);
                        } else {
                            $show->update([
                                'views' => $show->views + 1
                            ]);
                        }
                        $cookies[] = $banner;
                    }
                } else {
                    $show = ShowBanner::firstWhere('banner', $this->banner_name[$banner]);
                    if (empty($show)) {
                        ShowBanner::create([
                            'banner' => $this->banner_name[$banner],
                            'views' => 1,
                            'clicks' => 0
                        ]);
                    } else {
                        $show->update([
                            'views' => $show->views + 1
                        ]);
                    }
                    $cookies[] = $banner;
                }
            }
            return response()->json(['status' => true])->withCookie('show', json_encode($cookies, JSON_UNESCAPED_UNICODE), 60 * 24);
        }
    }

    public function click(Request $request)
    {
        $data = $request->only('type');
        $show = ShowBanner::firstWhere('banner', $this->banner_name[$data['type']]);
        $show->update([
            'clicks' => $show->clicks + 1
        ]);
        return response()->json(['status' => true]);
    }
}
