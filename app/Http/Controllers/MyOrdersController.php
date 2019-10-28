<?php

namespace App\Http\Controllers;

use App\Cart;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyOrdersController extends Controller
{
    public function index() {
        $orders = Orders::all();
        return view('myOrders.myOrders',['orders'=>$orders]);
    }
    public function show($id){
        $orders = Orders::findOrFail($id);
        return view('myOrders.show',['orders'=>$orders]);
    }
    public function store(Request $request){
        $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();
        foreach ($carts as $cart){
            $order = new Orders();
            $order->user_id = Auth::user()->id;
            $order->total_price = $cart->total_price;
            $order->save();
            $order_detail = new OrderDetail();
            $order_detail->id = $order->id;
            $order_detail->weight = $cart->count;
            $order_detail->product_id = $cart->product_id;
            $product = DB::table('products')->where('id',$cart->product_id)->first();
            $order_detail->price = $product->unit_price;
            $order_detail->save();
            $temp_cart = Cart::findOrFail($cart->id);
            $temp_cart->delete();
        }
        return redirect()->route('products.index');
    }
}
