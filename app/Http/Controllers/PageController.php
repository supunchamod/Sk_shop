<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shop (){

        return view('shop');
    }

    public function cart (){

        return view('cart');
    }

    public function wishlist (){

        return view('wishlist');
    }

    public function profile (){

        return view('profile');
    }

    public function checkout (){

        return view('checkout');
    }


}
