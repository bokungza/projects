@extends('layouts.master')


@section('content')
    <div>
        <div class="center">
            <h1>วิธีการชำระเงิน</h1>
            <h3>1.ชำระผ่านการโอนเงินบัญชีธนาคาร</h3>
            
            <div class="product-img">
                    <img class="img" src="{{ asset('img/bangkok.png') }}">
                </a>
                <h4>ธนาคารกรุงเทพ</h4>
                <p>สาขา ... | ออมทรัพย์</p>
                <p>ชื่อบัญชี ...</p>
                <p>0123456789</p>
            </div>
            <div class="product-img">
                    <img class="img" src="{{ asset('img/krungthai.png') }}">
                </a>
                <h4>ธนาคารกรุงไทย</h4>
                <p>สาขา ... | ออมทรัพย์</p>
                <p>ชื่อบัญชี ...</p>
                <p>0123456789</p>
            </div>
            <div class="product-img">
                    <img class="img" src="{{ asset('img/scb.png') }}">
                </a>
                <h4>ธนาคารไทยพาณิชย์</h4>
                <p>สาขา ... | ออมทรัพย์</p>
                <p>ชื่อบัญชี ...</p>
                <p>0123456789</p>
            </div>
        </div>


            
    </div>


@endsection
