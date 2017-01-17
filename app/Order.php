<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable=['total','delivered'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    public static function createOrder(){
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
  }

}
