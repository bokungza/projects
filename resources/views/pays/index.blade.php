@extends('layouts.master')

@section('content')
    
    <h1>รายการชำระเงินทั้งหมด</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">ดูรายการแจ้งชำระเงินทั้งหมด</li>
        </ol>
    </nav>
    <div class='card'>
    @foreach ($pays->sortByDesc('id') as $pay)
    @can ('view', $pay)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">
                <a href="{{ action('PaysController@show', [$pay->id]) }}">Order หมายเลข : {{ $pay->id }}</a>
            </h5>
            <p>จำนวนเงินที่ชำระ : {{ $pay->price}}</p>
            <p>ผู้ชำระเงิน : {{ $pay->first_name}} {{ $pay->last_name}}</p>
            @foreach ($orders as $order)
                @if ($order->id === $pay->order_id )
                <p>สถานะ : {{ $order->status}}</p>
                @endif
            @endforeach
            </div>
        </div>
    @endcan
    @endforeach
    </div>
@endsection
