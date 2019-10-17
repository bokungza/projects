<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
class MyOrdersController extends Controller
{
    public function index() {
        $orders = Orders::all();
        return view('myOrders.myOrders',['orders'=>$orders]);
    }
}
