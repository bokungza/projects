@extends('layouts.master')


@section('content')
<div class="center">
    <h1>วิธีการซื้อสินค้า</h1>
    
    <p>1.<a href="{{route('register')}}">สมัครสมาชิก</a></p>
    <p>2.เข้าสู่ระบบเลือกสินค้าที่ต้องการลงตะกล้าสินค้า</p>
    <p>3.กดยืนยันหากได้สินค้าที่ต้องการครบแล้ว รายการสั่งซื้อจะอยู่ที่ <a a href="/myOrders">รายการสั่งซื้อ</a></p>
    <p>4.ชำระเงินตามรายละเอียด "วิธีการชำระเงิน" ด้านล่าง</p>
    <p>5.เมื่อตรวจสอบรายการชำระเงินเรียบร้อยแล้วทางร้านจะจัดส่งสินค้าทันที</p>
</div>
<hr>
<h1>วิธีการชำระเงิน</h1>
<h3>1.ชำระผ่านการโอนเงินบัญชีธนาคาร</h3>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/bangkok.png') }}" style="max-width: 250px;" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4>ธนาคารกรุงไทย</h4>
              <p>สาขา ... | ออมทรัพย์</p>
              <p>ชื่อบัญชี ...</p>
              <p>0123456789</p>  
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/krungthai.png') }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4>ธนาคารกรุงไทย</h4>
            <p>สาขา ... | ออมทรัพย์</p>
            <p>ชื่อบัญชี ...</p>
            <p>0123456789</p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/scb.png') }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4>ธนาคารไทยพาณิชย์</h4>
              <p>สาขา ... | ออมทรัพย์</p>
              <p>ชื่อบัญชี ...</p>
              <p>0123456789</p>  
      </div>
    </div>
  </div>
</div>


@endsection
