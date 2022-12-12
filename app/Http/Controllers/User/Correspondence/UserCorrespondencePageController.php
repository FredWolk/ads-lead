<?php

namespace App\Http\Controllers\User\Correspondence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCorrespondencePageController extends Controller
{
    public function __invoke()
    {
        return view('user.correspondence-page');
    }
}
