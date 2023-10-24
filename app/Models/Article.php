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

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
    public function comments()
    {
        return $this->hasMany(ArticleComments::class, 'article_id', 'id')->with('author')->where('confirm', 1);
    }

}
