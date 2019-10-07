<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginHomesController extends Controller
{
    public function index() {
        return view('LoginHomes.LoginHomes');
    }
}
