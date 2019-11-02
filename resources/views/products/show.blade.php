@extends('layouts.master')

@section('content')
    <div class="products-container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/products">สินค้า</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $product->name}}</li>
      </ol>
    </nav>
        <div>
            <a href="#">
                <img class="img" src='../img/{{$product->picture}}'>
            </a>
        </div>
        <div class = "detail-container">
            <h3>{{ $product->name }}</h3><hr>
            <p>{{ $product->detail }}</p>
            <p style="float: left;width: 50%;" class = "p-detail">฿{{ $product->unit_price }}</p>
            <p style="float: right ; width: 50% ;text-align: right" class = "p-detail">In Stock : {{$product->count}}</p>
            @if (Gate::allows('add-cart',\App\Cart::class))
                <form action="{{ route('cart.store') }}" method = 'post' style="float: left;width: 100%">
                    @csrf
                    จำนวน : <input type="number" name="count">
                    <input type="hidden" value="{{$product->id}}" name="pid">
                    <button class="btn btn-primary" type="submit" style="float: right">Add to Cart</button>
                </form>
            @endif
        </div>
        @can('delete',$product)
        <form action="{{ route('products.destroy',['product'=>$product->id]) }}" method = 'post'>
            @csrf
            @method('DELETE')
            <input type="hidden" value="{{$product->id}}" name="pid">
            <button class="btn btn-outline-danger" type="submit" style="float: right;margin: 15px;">DELETE</button>
        </form>
            @endcan
    </div>
@endsection
