<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\AdvComments;
use App\Models\ArticleComments;
use App\Models\CpaComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendCommentController extends Controller
{
    public function articleComment(Request $request)
    {
        $data = $request->validate([
            'comment' => 'string|required',
            'id' => 'integer|required'
        ]);
        $user_id = Auth::user()->getAuthIdentifier();

        $model = ArticleComments::create([
            'user_id' => $user_id,
            'text' => $data['comment'],
            'article_id' => $data['id'],
            'confirm' => 0,
        ]);

        if ($model){
            return response()->json(['status' => true])->setStatusCode(200);
        } else {
            return response()->json(['status' => false])->setStatusCode(500);
        }

    }
    public function cpaComment(Request $request)
    {
        $data = $request->validate([
            'comment' => 'string|required',
            'id' => 'integer|required',
            'support' => 'integer',
            'payments' => 'integer',
            'offers' => 'integer',
            'betting' => 'integer',
        ]);
        $user_id = Auth::user()->getAuthIdentifier();

        $model = CpaComments::create([
            'user_id' => $user_id,
            'text' => $data['comment'],
            'support' => !empty($data['support']) ? $data['support'] : 0,
            'payments' => !empty($data['payments']) ? $data['payments'] : 0,
            'offers' => !empty($data['offers']) ? $data['offers'] : 0,
            'betting' => !empty($data['betting']) ? $data['betting'] : 0,
            'cpa_id' => $data['id'],
            'confirm' => 0,
        ]);

        if ($model){
            return response()->json(['status' => true])->setStatusCode(200);
        } else {
            return response()->json(['status' => false])->setStatusCode(500);
        }
    }
    public function adComment(Request $request)
    {
        $data = $request->validate([
            'comment' => 'string|required',
            'id' => 'integer|required',
            'support' => 'integer',
            'traffic_quality' => 'integer',
            'number_geos' => 'integer',
            'price_click' => 'integer',
        ]);
        $user_id = Auth::user()->getAuthIdentifier();

        $model = AdvComments::create([
            'user_id' => $user_id,
            'text' => $data['comment'],
            'support' => !empty($data['support']) ? $data['support'] : 0,
            'traffic_quality' => !empty($data['traffic_quality']) ? $data['traffic_quality'] : 0,
            'number_geos' => !empty($data['number_geos']) ? $data['number_geos'] : 0,
            'price_click' => !empty($data['price_click']) ? $data['price_click'] : 0,
            'ad_id' => $data['id'],
            'confirm' => 0,
        ]);

        if ($model){
            return response()->json(['status' => true])->setStatusCode(200);
        } else {
            return response()->json(['status' => false])->setStatusCode(500);
        }

    }
}
