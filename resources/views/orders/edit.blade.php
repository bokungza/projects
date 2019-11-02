@extends('layouts.master')

@section('content')



<div class="card">
  <p class = "text-center">
  <div class="card-header">
    อัพเดตสถานะ
  </div>
</p>
  <div class="card-body">
    <form action="{{'/orders/' . $order->id}}" method="POST">
    @method('PUT')
    @csrf
    @can ('update', $order)
    <input type="hidden" value="{{$order->id}}" name = "id">
    <p style="display: none">{{$user = \App\User::findOrFail($order->user_id)}}</p>
    <p>Order ID : <a href="{{ action('OrdersController@show', [$order->id]) }}">{{$order->id}}</a></p>
    <p>ผู้สั่ง : <a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</a></p>
    <div class="input-group mb-3">
        <label for="status">แก้ไขสถานะ</label>
      <select class="custom-select" id="inputGroupSelect02" name='status'>
        <option selected>{{ $order->status}}</option>
        <option >กำลังเตรียมส่ง</option>
        <option >จัดส่งเรียบร้อย</option>
      </select>
      <div class="input-group-append">
         <button class="btn btn-outline-secondary" type="submit">อัพ</button>
       </div>
    </div>
    </form>
    @endcan
  </div>
</div>
@endsection
