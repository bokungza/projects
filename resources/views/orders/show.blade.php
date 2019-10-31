@extends('layouts.master')

@section('content')

<div>
  @can ('view', $orders)
    <h1>Order ID : {{ $orders->id}}</h1>
      <p style="display: none">{{$user = \App\User::findOrFail($orders->user_id)}}</p>  ผู้สั่ง:<a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</a> สถานะ:{{ $orders->status}}
      <hr>
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
        <hr>
        <p class="text-right">ราคาสิงค้าทั้งหมด {{ $orders->total_price-50}} บาท</p>
        <p class="text-right">ค่าจัดส่งสินค้า 50 บาท</p>
        <p class="text-right">ราคาสุทธิ {{ $orders->total_price}} บาท</p>
        <a class="float-right btn btn-primary" href="{{ action('PaysController@create') }}" role="button">แจ้งชำระเงิน</a>
        @endcan
</div>
@endsection
