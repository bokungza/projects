<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.allproducts',['products' => $products]);
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('products.productdetail',['product' => $product]);
    }

    public function add(){
        return view('logins.addproduct');
    }

    public function addAction(Request $request){
        dd($request->all());
        $product = new App\product;
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->unitprice = $request->price;
        $product->save();
        return view('logins.addproductaction');
    }

}
