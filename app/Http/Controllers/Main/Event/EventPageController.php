<?php

namespace App\Http\Controllers\Main\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function __invoke()
    {
        return view('main.events.page');
    }
}
