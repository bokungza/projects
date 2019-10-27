@extends('layouts.master')

@section('content')

<div>
    <h1>Order ID : {{ $pay->orderid }}</h1>
        <a href='../img/payimages/{{$pay->picture}}'>
                <img src='../img/payimages/{{$pay->picture}}' class="img" style="float: left;
                            margin-right: 15px;">


        </a>
            <p>ธนาคาร : {{ $pay->bank }}</p>
            <p>วันและเวลาชำระเงิน : {{ $pay->paystime }}</p>
            <p>ชื่อผู้ชำระเงิน : {{ $pay->firstname }} {{ $pay->lastname }}</p>
            <p>จำนวนเงิน : {{ $pay->cost }}</p>
            <p>รหัสส่งสินค้า : {{ $pay->shipping }}</p>

            <a class="btn btn-primary" href="/pays/{{ $pay->id }}/edit" role="button">เพิ่ม/แก้ไข รหัสส่งสินค้า</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ลบข้อมูล</button>
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
                      <button type="submit" class="btn btn-secondary">ใช่</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ไม่</button>
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection
