<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','slug'];
    protected $table='product_categories';

    public function products()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(Product::class);
    }
}
