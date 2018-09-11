<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable=['name', 'description', 'size', 'price', 'image', 'category_id'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
