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
                <a href="{{ action('PaysController@show', [$pay->id]) }}">Order ID : {{ $pay->id }}</a>
            </h5>
            <p>จำนวนเงินที่ชำระ : {{ $pay->price}}</p>
            <p>สถานะ : {{ $pay->status}}</p
            </div>
        </div>
    @endcan
    @endforeach
    </div>
@endsection
