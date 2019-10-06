<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index() {
        return view('pays.pays');
    }
}
