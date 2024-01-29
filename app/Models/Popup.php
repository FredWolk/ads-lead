<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;

    protected $guarded = false;

    const MAIN_PAGE = 'main',
        FORUM_PAGE = 'forum';
}
