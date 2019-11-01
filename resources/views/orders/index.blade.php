@extends('layouts.master')

@section('content')

<div class="container">
  <h2>รายการสั่งซื้อ</h2>
  <table class="table  table-bordered table-hover ">
    <thead class="thead-dark">
      <tr>
        <th>รหัสorder</th>
        <th>วันที่สั่ง</th>
        <th>ราคา</th>
        <th>สถานะ</th>
        <th>ดูรายละเอียด</th>
        <th>ผู้สั่ง</th>
        <th >ยกเลิก</div>
        </th>
        @if(Auth::user()->role == "ADMIN")
          <th>อัพเดตสถานะ</th>
        @endif
      </tr>
    </thead>
    @foreach ($orders as $order)
    @can ('view', $order)
    <tbody>
        <p style="display: none">{{$user = \App\User::findOrFail($order->user_id)}}</p>
      <tr>

        <td>{{ $order->id}}</td>
        <td>{{ $order->created_at}}</td>
        <td>{{ $order->total_price}}</td>
        <td class="text-danger">{{ $order->status}}</td>
        <td><a href="{{ action('OrdersController@show', [$order->id]) }}">ดูรายละเอียดการสั่งซื้อ</a></td>
        <td><a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</a></td>
        <td class="border-0 align-middle text-center">
          <form method = "post" action ="{{route('orders.destroy' , ['order'=>$order->id])}}" >
            @csrf
            <input type="hidden" name="_method" value="DELETE">
           <button type="submit" class="btn btn-danger ">Delete</button>
        </form>
</td>
        @can ('update', $order)
          <td><a class="btn btn-primary" href="{{ action('OrdersController@edit', [$order->id]) }}" role="button">อัพเดทสถานะ</a></td>
        @endcan
      </tr>
      @endcan
      @endforeach
    </tbody>
  </table>
</div>
@endsection
