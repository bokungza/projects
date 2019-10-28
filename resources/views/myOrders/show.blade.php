@extends('layouts.master')

@section('content')

<div>
    <h1>Order ID : {{ $orders->id}}</h1>
      <p style="display: none">{{$user = \App\User::findOrFail($orders->user_id)}}</p>  ผู้สั่ง คือ <a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}ู</a>

      <table class="table  table-bordered table-hover ">
        <thead class="thead-dark">
                <tr>
                  <th >
                    <div class="p-2 px-3 text-uppercase">สินค้า</div>
                  </th>
                  
                  <th>
                    <div class="py-2 text-uppercase">ราคา</div>
                  </th>
                  <th>
                    <div class="py-2 text-uppercase">จำนวน(กก.)</div>
                  </th>
                </tr>
              </thead>
              <tbody>

        @foreach ($order_details as $order_detail)
          <p style="display: none">{{$product = \App\Product::findOrFail($order_detail->product_id)}}</p>
        <tbody>
        <tr>
          @if ($order_detail->order_id === $orders->id)
            <td><img src="{{ asset('img/'.$product->picture) }}"  width="70" class="img-fluid rounded shadow-sm">{{$product->name}}</td>
            <td>{{ $order_detail->price}}</td>
            <td>{{ $order_detail->weight}}</td>
          @endif
        </tr>
        @endforeach
        </table>
</div>
@endsection
