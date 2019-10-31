<?php

namespace App\Http\Controllers;

use App\Cart;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Address;
use Gate;


class OrdersController extends Controller
{
  public function __construct(){
     $this->middleware('auth');
 }
    public function index() {
        $orders = Order::all();
        return view('orders.index',['orders'=>$orders]);
    }
    public function show($id){

        $orders = Order::findOrFail($id);
if(Gate::denies('show-order',$orders)){
    return redirect()->route('orders.index');
}
        $address = DB::table('addresses')->where('id',$orders->address_id)->first();
        $order_details = OrderDetail::where('order_id', $id)->get();
        return view('orders.show',['orders'=>$orders,'order_details'=>$order_details,'address'=>$address]);
    }
    public function store(Request $request){
        $in_cart = Cart::where('user_id',Auth::user()->id)->count();
        if ($in_cart == 0){
            $user = Auth::user();
            $address = $user->addresses()->latest()->first();
            $carts = $user->carts()->get();
            return view('carts.index',['carts' => $carts,'address' => $address]);
        }
        $address = new Address;
        $address->user_id =  Auth::user()->id;
        $address->house_address = $request->input('house_address');
        $address->street = $request->input('street');
        $address->province = $request->input('province');
        $address->sub_district = $request->input('sub_district');
        $address->district = $request->input('district');
        $address->zip_code = $request->input('zip_code');
        $address->save();
        $carts = DB::table('carts')->where('user_id',Auth::user()->id)->get();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_price = 0;
        $order->address_id=$address->id;
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
        $order->total_price = DB::table('order_details')->where('order_id',$order->id)->sum('price')+50;
        $order->save();
        return redirect()->route('products.index');
    }
    public function edit($id){
        $orders = order::findOrFail($id);
        $user = DB::table('users')->where('id',$orders->user_id)->first();
        if(Gate::denies('edit-order',$orders)){
            return redirect()->route('orders.index');
        }
        return view('orders.edit', ['order' => $orders,'user' => $user]);
    }
    public function update(Request $request)
    {

        $orders = Order::findOrFail($request->input('id'));
        $orders->status = $request->input('status');
        $orders->save();
          return redirect()->route('products.index');
    }
    public function destroy($id)
    {
      $order= Order::find($id);
      $order->delete();
      $orders = Order::all();
      return view('orders.index',['orders'=>$orders]);
    }
}
