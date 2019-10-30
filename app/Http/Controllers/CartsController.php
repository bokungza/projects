<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Gate;
use App\Address;

class CartsController extends Controller
{public function __construct(){
     $this->middleware('auth');
 }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      if(Gate::denies('index-cart',Cart::class)){
           return redirect()->route('home');
       }
       $user = Auth::user();
      $address = $user->addresses()->latest()->first();
       $carts = $user->carts()->get();
        return view('carts.index',['carts' => $carts,'address' => $address]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'count' => ['required' , 'min:1' , 'max:255'],
            'pid' => ['required']
        ]);

        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $validatedData['pid'];
        $cart->count = $validatedData['count'];
        $product = Product::findOrFail($validatedData['pid']);
        $cart->total_price = $product->unit_price * $validatedData['count'];
        $cart->save();
        return redirect()->route('products.show',['product' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        $user = Auth::user();
        $carts = $user->carts()->get();
        return view('carts.index',['carts' => $carts]);
    }
}
