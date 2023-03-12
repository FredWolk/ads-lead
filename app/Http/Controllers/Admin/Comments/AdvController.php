<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Http\Controllers\Controller;
use App\Models\AdvComments;
use Illuminate\Http\Request;

class AdvController extends Controller
{
    public function index()
    {
        $comments = AdvComments::all()->where('confirm', 0);
        return view('admin.comments.adv', compact('comments'));
    }
    public function success(AdvComments $advComments)
    {
        $comments = $advComments->update([
            'confirm' => 1
        ]);
        if ($comments){
            return redirect()->route('comments.adv.index');
        }
    }

    public function delete(AdvComments $advComments)
    {
        $advComments->delete();
        return redirect()->route('comments.adv.index');
    }
}
