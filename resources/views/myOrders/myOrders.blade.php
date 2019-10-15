@extends('layouts.login')

@section('content')


<div class="container">
  <h2>รายการสั่งซื้อ</h2>     
  <table class="table  table-bordered table-hover table-primary">
    <thead>
      <tr>
        <th>รหัสorder</th>
        <th>ราคา</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    @foreach ($orders as $order)
    <tbody>
      <tr>
        <td>{{ $order->id}}</td>
        <td>{{ $order->price}}</td>
        <td class="text-danger">{{ $order->status}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
