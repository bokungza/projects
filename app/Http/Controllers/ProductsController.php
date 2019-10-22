<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Gate;

class ProductsController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index() {
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',['product' => $product]);
    }

    public function create(){
      if(Gate::denies('create-product',Product::class)){
           return redirect()->route('products.index');
       }
        return view('products.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required' , 'min:5' , 'max:255'],
            'detail' => ['required' , 'max:500'],
            'price' => ['required' , 'min:1'],
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $product = new Product;
        if ($files = $request->file('image')) {
            $destinationPath = '../public/img';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $product->picture = $profileImage;
        }
        $product->name = $validatedData['name'];
        $product->detail = $validatedData['detail'];
        $product->unit_price = $validatedData['price'];

        $product->save();
        return redirect()->route('products.show',['product' => $product->id]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        $products = Product::all();
        $this->authorize('delete', $product);
        return redirect()->route('products.index',['products' => $products]);
    }

}
