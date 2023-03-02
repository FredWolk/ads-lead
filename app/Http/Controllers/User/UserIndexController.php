<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserIndexController extends Controller
{
    public function __invoke()
    {
        $userInfo = Auth::user();
        return view('user.index', compact('userInfo'));
    }
}
