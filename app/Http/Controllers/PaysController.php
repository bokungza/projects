<?php

namespace App\Http\Controllers;


use App\Pay;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    //
    public function index(){
        $pays = Pay::all();
        return view('pays.index',['pays' => $pays]);
    }
    public function detail($id)
    {
        $pay = Product::findOrFail($id);
        return view('pays.productdetail',['pay' => $pay]);
    }
}
