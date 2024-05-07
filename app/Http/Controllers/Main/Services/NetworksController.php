<?php

namespace App\Http\Controllers\Main\Services;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Seo;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NetworksController extends Controller
{
    public function __invoke(Request $request)
    {
        $seo = Seo::where('page', Seo::TOOLS_PAGE)->first();
        $banner = BannerAside::where('show', 'tools')->where('status', 1)->first();
        $recomended = Services::where('is_recomendated', 1)->take(3)->get()->sortBy('listing_rating');
        $query = DB::table('services')->orderBy('id', 'desc');
        if (!empty($request->get('type'))){
            $query->where('type','like', '%'.$request->get('type').'%');
        }
        $services = $query->paginate(5);
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
