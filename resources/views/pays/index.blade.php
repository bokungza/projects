@extends('layouts.manager')

@section('content')
    <h1>รายการชำระเงินทั้งหมด</h1>
    <div class='card'>
    @foreach ($pays->sortByDesc('id') as $pay)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">
                <a href="{{ action('PaysController@show', [$pay->id]) }}">Order ID : {{ $pay->orderid }}</a>
            </h5>
            <p class="card-text">ชื่อผู้ชำระเงิน : {{ $pay->firstname }} {{ $pay->lastname }}</p>
            <p class="card-text">จำนวนเงิน : {{ $pay->cost }}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection
