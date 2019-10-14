@extends('layouts.login')

@section('content')
    <div class="products-container">
        <div>
            <a href="#">
                <img class="img" src='../img/{{$product->picture}}'>
            </a>
        </div>
        <div class = "detail-container">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->detail }}</p>
            <p class = "p-detail">฿{{ $product->unit_price }}</p>
            <form>
                จำนวน : <input type="number">
                <button type="button" class="btn btn-primary" type="submit" style="float: right">Add to Cart</button>
            </form>
        </div>
    </div>
@endsection
