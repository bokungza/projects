@extends('layouts.login')

@section('content')
    <div class="products-container">
        <div>
            <a href="#">
                <img class="img" src="{{ asset('img/round.jpg') }}">
            </a>
        </div>
        <div class = "detail-container">
            <h3>Round Beef (เนื้อส่วนสะโพก)</h3>
            <p>เนื้อส่วนนี้เป็นเนื้อไขมันน้อย เหมาะกับการประกอบอาหารที่ใช้ความชื้นและเวลายาวนาน</p>
            <p class = "p-detail">฿30.00</p>
            <form>
                จำนวน : <input type="number">
                <button type="button" class="btn btn-primary" type="submit" style="float: right">Add to Cart</button>
            </form>
        </div>
    </div>
@endsection
