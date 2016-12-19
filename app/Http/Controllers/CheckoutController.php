<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function step1()
    {
        if(Auth::check()){
            return redirect()->route('checkout.shipping');
        }

        return redirect('login');
    }

    public function shipping()
    {
        return view('front.shipping-info');
    }

}
