<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','size','category_id','image','price'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }


}
