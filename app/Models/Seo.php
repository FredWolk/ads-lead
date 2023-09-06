<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seo extends Model
{
    const MAIN_PAGE = 'main',
        CPA_PAGE = 'cpa',
        ADS_PAGE = 'ads',
        ARTICLES_PAGE = 'articles',
        VIDEOS_PAGE = 'videos',
        EVENTS_PAGE = 'events',
        FORUM_PAGE = 'forum',
        TOOLS_PAGE = 'tools',
        CASES_PAGE = 'cases';

    use HasFactory;
    use SoftDeletes;

    protected $table = 'seo';
    protected $guarded = false;
}
