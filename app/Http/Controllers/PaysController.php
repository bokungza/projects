<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pay;
use Gate;

class PaysController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index() {
        $pays = pay::all();
        return view('pays.index', ['pays' => $pays]);
    }
    public function show($id){
        $pays = pay::findOrFail($id);
        if(Gate::denies('show-pay',$pays)){
            return redirect()->route('pays.index');
        }
        return view('pays.show', ['pay' => $pays]);
    }
    public function create(){
        return view('pays.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'order_id' => ['required' , 'min:1'],
            'user_id' => ['required' , 'max:500'],
            'bank' => ['required' , 'max:500'],
            'status' => ['required' , 'max:500'],
            'pay_time' => ['required' , 'min:1'],
            'first_name' => ['required' , 'max:500'],
            'last_name' => ['required' , 'max:500'],
            'price' => ['required' , 'min:1'],
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $pay = new Pay;
        if ($files = $request->file('image')) {
            $destinationPath = '../public/img/payimages';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $pay->picture = $profileImage;
        }
        $pay->order_id = $validatedData['order_id'];
        $pay->user_id = $validatedData['user_id'];
        $pay->bank = $validatedData['bank'];
        $pay->status = $validatedData['status'];
        $pay->pay_time = $validatedData['pay_time'];
        $pay->first_name = $validatedData['first_name'];
        $pay->last_name = $validatedData['last_name'];
        $pay->price = $validatedData['price'];
        $pay->save();
        return redirect()->route('pays.index',['pay' => $pay]);
    }
    public function update(Request $request, $id) {

        $pay = pay::findOrFail($id);
        //$this->authorize('update',Pay::class);
        $validatedData = $request->validate([
            'status' => ['required' , 'max:500'],
        ]);
        $pay->status = $validatedData['status'];
        $this->authorize('update', $pay);
        $pay->save();
        return redirect()->route('pays.show',['pays' => $pay->id]);
    }
    public function edit($id){
        $pay = pay::findOrFail($id);
        return view('pays.edit', ['pay' => $pay]);
    }
    public function destroy(Pay $pay){
        $pay->delete();
        $pays = Pay::all();
        $this->authorize('delete', $pay);
        return redirect()->route('pays.index',['pays' => $pays]);
    }
}
