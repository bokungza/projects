<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LoginPaymentsController extends Controller
{
    public function index() {
        return view('LoginPayments.LoginPayments');
    }

}
