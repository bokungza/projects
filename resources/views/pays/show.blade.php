@extends('layouts.master')

@section('content')
<div>
    <h1>Order ID : {{ $pay->order_id }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/pays">ดูรายการแจ้งชำระเงินทั้งหมด</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายการชำระเงินหมายเลข {{ $pay->order_id }}</li>
      </ol>
    </nav>
    <a href='../img/payimages/{{$pay->picture}}'>
                <img src='../img/payimages/{{$pay->picture}}' class="img" style="float: left;
                            margin-right: 15px;">
    </a>

            <p>ธนาคาร : {{ $pay->bank }}</p>
            <p>ชื่อผู้ชำระเงิน : {{ $pay->first_name }} {{ $pay->last_name }}</p>
            <p>วันและเวลาชำระเงิน :  : {{ $pay->pay_time }}</p>
            <p>จำนวนเงิน : {{ $pay->price }}</p>
            @foreach ($orders as $order)
                @if ($order->id == $pay->order_id )
                <p>สถานะ : {{ $order->status}}</p>
                @endif
            @endforeach

            @can('update',$pay)
            <a class="btn btn-primary" href="/orders/{{ $pay->order_id }}/edit" role="button">อัพเดทสถานะ</a>
            @endcan
            @can('delete',$pay)
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ลบข้อมูล</button>
            @endcan
            <a class="btn btn-primary" href="/orders/{{ $pay->order_id }}" role="button">เช็ครายการ</a>
            <a class="btn btn-primary" href="/pays/" role="button">ย้อนกลับ</a>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLabel">ลบข้อมูล</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      คุณค้องการลบใช่ไหม
                    </div>
                    <div class="modal-footer">
                      <form  action="{{route('pays.destroy', ['pay' => $pay->id ])}}" method='post'>
                      @csrf
                      @method('DELETE')
                      <button href="/pay" type="submit" class="btn btn-secondary">ใช่</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ไม่</button>
                    </div>
                  </div>
                </div>
              </div>

</div>
@endsection
