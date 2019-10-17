@extends('layouts.manager')

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
            <a class="nav-link" href="/pays/{{ $pay->id }}/edit">เพิ่ม/แก้ไข รหัสส่งสินค้า <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="/pays/">ย้อนกลับ <span class="sr-only">(current)</span></a>
    
</div>
@endsection
