<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('products.allproducts');
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('products.productdetail',['product' => $product]);
    }

}
