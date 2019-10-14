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
    public function show($id){
        $pay = pay::findOrFail($id);
        return view('pays.show', ['pay' => $pay]);
    }
    public function create(){
        return view('pays.create');
    }
    public function store(Request $request){
        $pay = new Post;
        $pay->orderid = $request->input('orderid');
        $pay->bank = $request->input('bank');
        $pay->day = $request->input('day');
        $pay->month = $request->input('month');
        $pay->year = $request->input('year');
        $pay->hour = $request->input('hour');
        $pay->minute = $request->input('minute');
        $pay->payerfirstname = $request->input('payerfirstname');
        $pay->payerlastname = $request->input('payerlastname');
        $pay->amount = $request->input('amount');
        $pay->save();
        return redirect()->action('PaysController@show',['id' => $pay->id]);
    }
}
