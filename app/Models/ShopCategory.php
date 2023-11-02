<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function shops()
    {
        return $this->hasMany(Shop::class, 'category_id', 'id');
    }
}
