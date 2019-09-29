@extends('layouts.master')

@section('content')
    <div class="products-container">
        <h2>สินค้า</h2>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/round.jpg') }}">
            </a>
            <span>Round Beef (เนื้อส่วนสะโพก) <br>เนื้อส่วนนี้เป็นเนื้อไขมันน้อย เหมาะกับการประกอบอาหารที่ใช้ความชื้นและเวลายาวนาน</span>
            <p class = "p">฿30.00</p>
        </div>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/chuck.jpeg') }}">
            </a>
            <span>Chuck Beef (เนื้อสันคอ) <br>เนื้อส่วนนี้มักจะมาทำเป็นแฮมเบอร์เกอร์</span>
            <p class = "p">฿30.00</p>
        </div>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/rib.jpg') }}">
            </a>
            <span>Rib Beef (เนื้อซี่โครง) <br>ส่วนมากนำไปย่างหรือทอดโดยไม่ต้องเลาะกระดูกออก</span>
            <p class = "p">฿30.00</p>
        </div>
        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/sirloin.jpg') }}">
            </a>
            <span>Sirloin Beef (เนื้อเซอร์ลอยด์) <br>เป็นเนื้อสันที่นุ่มมากที่สุดใน บรรดาเนื้อส่วนต่างๆ ส่วนที่ติดกับกระดูกรูปตัว T เรามักจะเรียกว่า "ทีโบนสเต็ก"
            </span>
            <p class = "p">฿30.00</p>
        </div>        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/tenderloin.jpg') }}">
            </a>
            <span>Tenderloin Beef (เนื้อสันใน) <br>เป็นเนื้อที่นุ่มและแพงที่สุด นิยมทำสเต็ก เช่น ฟิเลต์มิยอง</span>
            <p class = "p">฿30.00</p>
        </div>        <div class="product-img">
            <a href="#">
                <img class="img" src="{{ asset('img/shank.jpg') }}">
            </a>
            <span>Shank Beef (เนื้อน่อง) <br>เป็นเนื้อที่เหนียวที่สุด มักนิยมทำสตูว์หรือตุ๋น</span>
            <p class = "p">฿30.00</p>
        </div>
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


@endsection
