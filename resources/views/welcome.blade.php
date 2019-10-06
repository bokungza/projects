@extends('layouts.master')

@section('content')
    <div class="products-container">
        <h2>สินค้าใหม่!!!</h2>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('http://www.jat-languagecafe.com/newsite/pic/matsusakaushi-3.gif') }}">
            </a>
            <span>เนื้อวัวมัตสึซากะ <br>เนื้อวัวจากวัวที่เลี้ยงบริเวณเมืองมัตสึซากะ จังหวัดมิเอะ เนื้อมัตสึซากะเป็นเนื้อที่ได้รับการยอมรับให้เป็นหนึ่งในเนื้อวัวคุณภาพสูงสามชนิดของญี่ปุ่นร่วมกับเนื้อโคเบะจากจังหวัดเฮียวโงะและเนื้อโอมิจากจังหวัดชิงะ</span>
            <p class = "p">฿4500.00</p>
        </div>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('https://www.passiondelivery.com/spree/products/5973/large/data.?1557808759') }}">
            </a>
            <span>เนื้อวัว “เกรด A5” <br>เนื้อคุณภาพนำเข้าจากญี่ปุ่น</span>
            <p class = "p">฿6,300.00</p>
        </div>
    </div>
    <br>

@endsection
