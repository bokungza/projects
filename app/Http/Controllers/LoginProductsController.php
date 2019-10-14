<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LoginProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('LoginProducts.LoginProducts',['products' => $products]);
    }

}
