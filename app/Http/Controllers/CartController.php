<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
  public function _construct(){
    if(!\Session::has('cart')) \Session::put('cart',array());
  }
    //Show Cart
    public function show(){
      $cart =\Session::get('cart');

    }
    //Add Item

    //Delete item

    //Update item

    //trash cart

    //Total
}
