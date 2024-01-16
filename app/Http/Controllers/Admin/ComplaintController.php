<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\Trade;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaints::select('trade_id', 'id')->get()->groupBy('trade_id');
        $trades = [];
        if (!empty($complaints))
            foreach ($complaints as $k => $c)
                $trades[$k] = Trade::select('title')->where('id', $k)->first();
        return view('admin.complaints.index', compact('complaints', 'trades'));
    }

    public function page($id)
    {
        $messages = Complaints::where('trade_id', $id)->select('message', 'user_id')->get();
        $trade = Trade::select('title', 'id')->where('id', $id)->first();
        return view('admin.complaints.page', compact('messages', 'trade'));
    }

    public function delete($id)
    {
        Trade::firstWhere('id', $id)->delete();
        $complaints = Complaints::where('trade_id', $id)->get();
        foreach ($complaints as $c)
            $c->delete();
        return redirect()->route('complaint.index');
    }
}
