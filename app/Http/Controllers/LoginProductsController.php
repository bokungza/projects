<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LoginProductsController extends Controller
{
    public function index() {
        return view('LoginProducts.LoginProducts');
    }

}
