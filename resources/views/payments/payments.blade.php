@extends('layouts.master')


@section('content')
<div class="center">
    <h1>วิธีการซื้อสินค้า</h1>
</div>
hr
<h1>วิธีการชำระเงิน</h1>
<h3>1.ชำระผ่านการโอนเงินบัญชีธนาคาร</h3>
<div class="card mb-3" style="width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/bangkok.png') }}" style="width: 50%;">
      
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
<div class="card mb-3" style="width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/krungthai.png') }}" class="card-img" style="max-width: 540px;">
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
<div class="card mb-3" style="width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('img/scb.png') }}" class="card-img" style="max-width: 540px;">
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
