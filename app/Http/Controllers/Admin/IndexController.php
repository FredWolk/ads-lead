<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Article;
use App\Models\Cpa;
use App\Models\Events;
use App\Models\Services;
use App\Models\ShowBanner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $banners = ShowBanner::all();
        return view('admin.index', compact('banners'));
    }

    public function adminSearch(\Illuminate\Http\Request $request)
    {
        $data = $request->only('search_text');
        $array['article'] = Article::where('name', 'LIKE' ,"%{$data['search_text']}%")->select('name', 'id')->get();
        $array['ad'] = Ad::where('name', 'LIKE' ,"%{$data['search_text']}%")->select('name', 'id')->get();
        $array['cpa'] = Cpa::where('name', 'LIKE' ,"%{$data['search_text']}%")->select('name', 'id')->get();
        $array['event'] = Events::where('name', 'LIKE' ,"%{$data['search_text']}%")->select('name', 'id')->get();
        $array['services'] = Services::where('name', 'LIKE' ,"%{$data['search_text']}%")->select('name', 'id')->get();
        return response()->json($array);
    }
}
