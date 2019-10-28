@extends('layouts.master')

@section('content')

<div>
    <h1>Order ID : {{ $orders->id}}</h1>
    <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">สินค้า</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">ราคา</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">จำนวน(กก.)</div>
                  </th>
                </tr>
              </thead>
              <tbody>
            
        @foreach ($order_details as $order_detail)
        <tbody>
        <tr>
          @if ($order_detail->order_id === $orders->id)
            <td>{{ $order_detail->product_id}}</td>
            <td>{{ $order_detail->price}}</td>
            <td>{{ $order_detail->weight}}</td>
          @endif
        </tr>
        @endforeach
        </table>
</div>
@endsection
