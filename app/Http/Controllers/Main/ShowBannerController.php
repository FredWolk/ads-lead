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
        'forum_banner' => 'Баннер на форуме',

        'top_pp_1' => 'Топ ПП 1 место SITE',
        'top_pp_2' => 'Топ ПП 2 место SITE',
        'top_pp_3' => 'Топ ПП 3 место SITE',
        'top_pp_4' => 'Топ ПП 4 место SITE',
        'top_pp_5' => 'Топ ПП 5 место SITE',
        'top_pp_1_read' => 'Топ ПП 1 место READ MORE',
        'top_pp_2_read' => 'Топ ПП 2 место READ MORE',
        'top_pp_3_read' => 'Топ ПП 3 место READ MORE',
        'top_pp_4_read' => 'Топ ПП 4 место READ MORE',
        'top_pp_5_read' => 'Топ ПП 5 место READ MORE',

        'top_cpa_1' => 'Топ СЕТОК 1 место SITE',
        'top_cpa_2' => 'Топ СЕТОК 2 место SITE',
        'top_cpa_3' => 'Топ СЕТОК 3 место SITE',
        'top_cpa_4' => 'Топ СЕТОК 4 место SITE',
        'top_cpa_5' => 'Топ СЕТОК 5 место SITE',
        'top_cpa_1_read' => 'Топ СЕТОК 1 место READ MORE',
        'top_cpa_2_read' => 'Топ СЕТОК 2 место READ MORE',
        'top_cpa_3_read' => 'Топ СЕТОК 3 место READ MORE',
        'top_cpa_4_read' => 'Топ СЕТОК 4 место READ MORE',
        'top_cpa_5_read' => 'Топ СЕТОК 5 место READ MORE',

        'rec_pp_1' => 'Рекомендации ПП 1 место',
        'rec_pp_1_rev' => 'Рекомендации ПП 1 место REVIEW',
        'rec_pp_2' => 'Рекомендации ПП 2 место',
        'rec_pp_2_rev' => 'Рекомендации ПП 2 место REVIEW',
        'rec_pp_3' => 'Рекомендации ПП 3 место',
        'rec_pp_3_rev' => 'Рекомендации ПП 3 место REVIEW',

        'rec_cpa_1' => 'Рекомендации СЕТОК 1 место',
        'rec_cpa_1_rev' => 'Рекомендации СЕТОК 1 место REVIEW',
        'rec_cpa_2' => 'Рекомендации СЕТОК 2 место',
        'rec_cpa_2_rev' => 'Рекомендации СЕТОК 2 место REVIEW',
        'rec_cpa_3' => 'Рекомендации СЕТОК 3 место',
        'rec_cpa_3_rev' => 'Рекомендации СЕТОК 3 место REVIEW',

        'rec_tools_1' => 'Рекомендации СЕРВИСОВ 1 место',
        'rec_tools_1_rev' => 'Рекомендации СЕРВИСОВ 1 место REVIEW',
        'rec_tools_2' => 'Рекомендации СЕРВИСОВ 2 место',
        'rec_tools_2_rev' => 'Рекомендации СЕРВИСОВ 2 место REVIEW',
        'rec_tools_3' => 'Рекомендации СЕРВИСОВ 3 место',
        'rec_tools_3_rev' => 'Рекомендации СЕРВИСОВ 3 место REVIEW',
    ];

    public function views(Request $request)
    {
        $data = $request->only('arr');
        if (!empty(\Illuminate\Support\Facades\Cookie::get('show')))
            $cookies = json_decode(\Illuminate\Support\Facades\Cookie::get('show'), 1);
        if (!empty($data['arr'])) {
            foreach ($data['arr'] as $banner) {
                if (!empty($cookies)) {
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
