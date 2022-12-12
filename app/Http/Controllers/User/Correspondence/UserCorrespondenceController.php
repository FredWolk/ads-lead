<?php

namespace App\Http\Controllers\User\Correspondence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCorrespondenceController extends Controller
{
    public function __invoke()
    {
        return view('user.correspondence');
    }
}
