<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Http\Controllers\Controller;
use App\Models\CpaComments;
use Illuminate\Http\Request;

class CpaController extends Controller
{
    public function index()
    {
        $comments = CpaComments::all()->where('confirm', 0);
        return view('admin.comments.cpa', compact('comments'));
    }
    public function success(CpaComments $cpaComments)
    {
        $comments = $cpaComments->update([
            'confirm' => 1
        ]);
        if ($comments){
            return redirect()->route('comments.cpa.index');
        }
    }

    public function delete(CpaComments $cpaComments)
    {
        $cpaComments->delete();
        return redirect()->route('comments.cpa.index');
    }
}
