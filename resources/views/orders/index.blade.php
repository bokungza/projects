@extends('layouts.master')

@section('content')


<div class="container">
  <h2>รายการสั่งซื้อ</h2>
  <table class="table  table-bordered table-hover ">
    <thead class="thead-dark">
      <tr>
        <th>รหัสorder</th>
        <th>ราคา</th>
        <th>สถานะ</th>
        <th>ดูรายละเอียด</th>
        <th>ผู้สั่ง</th>
        <th>อัพเดตสถานะ</th>
      </tr>
    </thead>
    @foreach ($orders as $order)
    <tbody>
        <p style="display: none">{{$user = \App\User::findOrFail($order->user_id)}}</p>
      <tr>

        <td>{{ $order->id}}</td>
        <td>{{ $order->total_price}}</td>
        <td class="text-danger">{{ $order->status}}</td>
        <td><a href="{{ action('OrdersController@show', [$order->id]) }}">ดูรายละเอียดการสั่งซื้อ</a></td>
        <td><a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</a></td>
          <td><a class="btn btn-primary" href="{{ action('OrdersController@edit', [$order->id]) }}" role="button">อัพเดทสถานะ</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
