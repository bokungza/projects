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
    public function show(Pay $pay){
        
        return view('pays.show', ['pay' => $pay]);
    }
    public function create(){
        return view('pays.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'orderid' => ['required' , 'min:10' , 'max:10'],
            'bank' => ['required' , 'max:1000'],
            'day' => ['required' , 'min:1'],
            'month' => ['required' , 'min:1'],
            'year' => ['required' , 'min:1'],
            'hour' => ['required' , 'min:1'],
            'minute' => ['required' , 'min:1'],
            'payerfirstname' => ['required' , 'min:1'],
            'payerlastname' => ['required' , 'min:1'],
            'amount' => ['required' , 'min:1']
        ]);

        $pay = new Pay;
        $pay->orderid = $validatedData['orderid'];
        $pay->bank = $validatedData['bank'];
        $pay->day = $validatedData['day'];
        $pay->month = $validatedData['month'];
        $pay->year = $validatedData['year'];
        $pay->hour = $validatedData['hour'];
        $pay->minute = $validatedData['minute'];
        $pay->payerfirstname = $validatedData['payerfirstname'];
        $pay->payerlastname = $validatedData['payerlastname'];
        $pay->amount = $validatedData['amount'];

        $pay->save();
        return redirect()->route('pays.create',['pay' => $pay->id]);
    }
}
