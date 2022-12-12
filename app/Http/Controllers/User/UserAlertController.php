<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAlertController extends Controller
{
    public function __invoke()
    {
        return view('user.alert');
    }
}
