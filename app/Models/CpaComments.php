<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpaComments extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'cpa_comments';

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
