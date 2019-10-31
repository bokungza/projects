@extends('layouts.master')

@section('content')

<div>
  @can ('view', $orders)
    <h1>Order ID : {{ $orders->id}}</h1>
      <p style="display: none">{{$user = \App\User::findOrFail($orders->user_id)}}</p>
      <p>ผู้สั่ง:<a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</p>
      <p></a> สถานะ:{{ $orders->status}}</p>
      <p>ที่อยู่จัดส่ง :  {{$address->house_address}} ถนน{{$address->street}} แขวง/ตำบล{{$address->sub_district}} เขต/อำเภอ{{$address->district}} {{$address->province}} {{$address->zip_code}}</p>

      <table class="table  table-bordered table-hover ">
        <thead class="thead-dark">
                <tr>
                  <th >
                    <div class="p-2 px-3 text-uppercase">สินค้า</div>
                  </th>
                  <th>
                    <div class="py-2 text-uppercase">กก.ละ</div>
                  </th>
                  <th>
                    <div class="py-2 text-uppercase">จำนวน(กก.)</div>
                  </th>

                  <th>
                    <div class="py-2 text-uppercase">ราคา</div>
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
            <td >{{$product->unit_price}}</td>
            <td>{{ $order_detail->weight}}</td>
              <td>{{ $order_detail->price}}</td>

          @endif
        </tr>
        @endforeach
        </table>
        <a class="btn btn-primary" href="{{ action('PaysController@create') }}" role="button">แจ้งชำระเงิน</a>
        @endcan
</div>
@endsection
