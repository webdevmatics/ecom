<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable=[
        'headline',
        'description',
        'product_id',
        'rating'
    ];
}
