<?php

namespace App\Http\Controllers;

use App\Pay;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
    public function update(Request $request, $id)
    {

        $pay = pay::findOrFail($id);
        //$this->authorize('update',Pay::class);
        $validatedData = $request->validate([
          'shipping' => ['required' , 'min:1'],
        ]);
        $pay->shipping = $validatedData['shipping'];
        $this->authorize('update', $pay);
        $pay->save();

        return redirect()->route('pays.show',['pays' => $pay->id]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'orderid' => ['required' , 'min:1'],
            'bank' => ['required' , 'max:500'],
            'paystime' => ['required' , 'min:1'],
            'firstname' => ['required' , 'min:1' , 'max:255'],
            'lastname' => ['required' , 'min:1' , 'max:255'],
            'cost' => ['required' , 'min:1'],
            'shipping' => ['required' , 'min:1'],
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $pay = new Pay;
        if ($files = $request->file('image')) {
            $destinationPath = '../public/img/payimages';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $pay->picture = $profileImage;
        }
        $pay->orderid = $validatedData['orderid'];
        $pay->bank = $validatedData['bank'];
        $pay->paystime = $validatedData['paystime'];
        $pay->firstname = $validatedData['firstname'];
        $pay->lastname = $validatedData['lastname'];
        $pay->cost = $validatedData['cost'];
        $pay->shipping = $validatedData['shipping'];
        $pay->save();
        return view('pays.index');
    }
    public function edit($id){
        $pay = pay::findOrFail($id);
        return view('pays.edit', ['pay' => $pay]);
    }
    public function destroy(Pay $pay){
        $pay->delete();
        $pay = Pay::all();
        $this->authorize('delete', $pay);
        return redirect()->route('pays.index',['pays' => $pays]);
    }

}
