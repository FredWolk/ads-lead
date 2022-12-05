<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles';
    protected $guarded = false;

    protected $casts = [
        'tags' => 'array',
        'contents' => 'array',
        'pt_contents' => 'array',
        'for_whom' => 'array',
        'pt_for_whom' => 'array',
    ];
}
