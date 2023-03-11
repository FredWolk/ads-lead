<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CpaController extends Controller
{
    public function index()
    {
        return view('admin.comments.cpa');
    }
    public function success(Request $request)
    {
        dd('123');
    }
    public function delete(Request $request)
    {
        dd('123');
    }
}
