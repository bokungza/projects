<?php

namespace App\Http\Controllers;

use App\Pay;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    //
    public function index(){
        $pays = pay::all();
        return view('pays.index', ['pays' => $pays]);
    }
    public function show($id){
        $pay = pay::findOrFail($id);
        return view('pays.show', ['pay' => $pay]);
    }
    public function create(){
        return view('pays.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'orderid' => ['required' , 'min:5' , 'max:255'],
            'bank' => ['required' , 'max:500'],
            'day' => ['required' , 'min:1'],
            'month' => ['required' , 'min:1'],
            'year' => ['required' , 'min:1'],
            'hour' => ['required' , 'min:1'],
            'minute' => ['required' , 'min:1'],
            'firstname' => ['required' , 'min:1' , 'max:255'],
            'lastname' => ['required' , 'min:1' , 'max:255'],
            'cost' => ['required' , 'min:1'],
        ]);

        $pay = new Pay;
        $pay->orderid = $validatedData['orderid'];
        $pay->bank = $validatedData['bank'];
        $pay->day = $validatedData['day'];
        $pay->month = $validatedData['month'];
        $pay->year = $validatedData['year'];
        $pay->hour = $validatedData['hour'];
        $pay->minute = $validatedData['minute'];
        $pay->firstname = $validatedData['firstname'];
        $pay->lastname = $validatedData['lastname'];
        $pay->cost = $validatedData['cost'];
        $pay->save();
        return redirect()->route('pays.show',['pay' => $pay->id]);
    }
}
