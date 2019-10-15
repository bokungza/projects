<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $orders = Orders::all();
        return view('myOrders.myOrders',['orders'=>$orders]);
    }

}
