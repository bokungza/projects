<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('products.allproducts');
    }

    public function detail($id)
    {
        return view('products.productdetail',['id' => $id]);
    }

}
