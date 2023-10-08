<?php

namespace App\Http\Controllers\Main\Services;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Seo;
use App\Models\Services;
use Illuminate\Support\Facades\App;

class NetworksController extends Controller
{
    public function __invoke()
    {
        $seo = Seo::where('page', Seo::TOOLS_PAGE)->first();
        $banner = BannerAside::where('show', 'all')->where('status', 1)->first();
        $recomended = Services::all()->where('is_recomendated', 1)->take(2);
        $services = Services::paginate(5);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view(
            'main.services.networks',
            compact(
                'seo',
                'banner',
                'recomended',
                'services',
                'locale'
            )
        );
    }
}
