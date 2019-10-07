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

    public function addaction(){
        return view('logins.addproduct');
    }

}
