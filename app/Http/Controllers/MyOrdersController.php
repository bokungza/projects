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
        $order_details = OrderDetail::where('order_id', $id)->get();
        return view('myOrders.show',['orders'=>$orders,'order_details'=>$order_details]);
    }
    public function store(Request $request){
        $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();
        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->total_price = 0;
        $order->save();
        foreach ($carts as $cart){
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->weight = $cart->count;
            $order_detail->product_id = $cart->product_id;
            $product = DB::table('products')->where('id',$cart->product_id)->first();
            $order_detail->price = $product->unit_price * $cart->count;
            $order_detail->save();
            $temp_cart = Cart::findOrFail($cart->id);
            $temp_cart->delete();
        }
        $order->total_price = DB::table('order_details')->where('order_id',$order->id)->sum('price');
        $order->save();
        return redirect()->route('products.index');
    }
    public function edit($id){
        $order = Orders::findOrFail($id);
        return view('myOrders.edit', ['order' => $order]);
    }
    public function update(Request $request, $id)
    {

        $orders = Orders::findOrFail($id);
        $orders->status = $validatedData['status'];
        $orders->save();

          return redirect()->route('products.index');
    }
}
