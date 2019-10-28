@extends('layouts.master')

@section('content')


<div class="container">
  <h2>รายการสั่งซื้อ</h2>     
  <table class="table  table-bordered table-hover table-primary">
    <thead>
      <tr>
        <th>รหัสorder</th>
        <th>ราคา</th>
        <th>สถานะ</th>
        <th>ดูรายละเอียด</th>
      </tr>
    </thead>
    @foreach ($orders as $order)
    <tbody>
      <tr>
      
        <td>{{ $order->id}}</td>
        <td>{{ $order->total_price}}</td>
        <td class="text-danger">{{ $order->status}}</td>
        <td><a href="{{ action('MyOrdersController@show', [$order->id]) }}">ดูรายละเอียดการสั่งซื้อ</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
