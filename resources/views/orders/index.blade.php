@extends('layouts.master')

@section('content')



<div class="card text-center">

  <div class="card-header">
      <h2>รายการสั่งซื้อ</h2>
  </div>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">รายการสั่งซื้อ</li>
        </ol>
    </nav>
  <div class="card-body">
    <table class="table  table-bordered table-hover ">
      <thead class="thead-dark">
        <tr>
          <th>รหัสorder</th>
          <th>วันที่สั่ง</th>
          <th>ราคา</th>
          <th>สถานะ</th>
          <th>ดูรายละเอียด</th>
          <th>ผู้สั่ง</th>
          @if(Auth::user()->role == "ADMIN")
            <th>อัพเดตสถานะ</th>
          @endif
          <th >ยกเลิก</div>
          </th>

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
          @if ($order->status == 'ยังไม่ชำระเงิน')
            <td class="text-danger"> {{$order->status}}</td>
          @elseif($order->status == 'จัดส่งเรียบร้อย')
            <td class="text-success"> {{$order->status}}</td>
          @else
          <td > {{$order->status}}</td>
          @endif
          <td><a href="{{ action('OrdersController@show', [$order->id]) }}">ดูรายละเอียดการสั่งซื้อ</a></td>
          <td><a href="{{route('users.show' ,  ['user' => $user->id])}}"> {{$user->username}}</a></td>

          @can ('update', $order)
            <td><a class="btn btn-primary" href="{{ action('OrdersController@edit', [$order->id]) }}" role="button">อัพเดทสถานะ</a></td>
          @endcan
          @if ($order->status == 'ยังไม่ชำระเงิน')
          <td class="border-0 align-middle text-center">
            <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal">Delete</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">ลบ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span  style = "height:100%;padding:0;"  aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>คุณต้องการลบรายการสั่งซื้อใช่ไหม</p>
                  </div>
                  <div class="modal-footer">
                    <form method = "post" action ="{{route('orders.destroy' , ['order'=>$order->id])}}" >
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                     <button type="submit" class="btn btn-danger ">ลบ</button>
                  </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                  </div>
                </div>
              </div>
            </div>
        </td>
        @else
          <td class="border-0 align-middle text-center">
        <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal" disabled>Delete</button>
          </td>
        @endif
        </tr>
        @endcan
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
