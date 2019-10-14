@extends('layouts.login')

@section('content')
    <div class="products-container">
        <h2>สินค้า</h2>
        @foreach ($products as $product)
            <div class="product-img">
                <a href="/products/{{$product->id}}">
                    <img class="img" src="img/{{$product->picture}}">
                </a>
                <span>{{$product->name}}<br>{{$product->detail}}</span>
                <p class = "p">฿{{$product->unit_price}}</p>
            </div>
        @endforeach
    </div>


@endsection
