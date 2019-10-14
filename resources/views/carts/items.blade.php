@extends('layouts.login')

@section('content')


<div class="products-container">
      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">สินค้า</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">ราคา</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">จำนวน(กก.)</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">ยกเลิก</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{ asset('img/round.jpg') }}"  width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Round Beef (เนื้อส่วนสะโพก)</a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle text-center"><strong>฿250.00</strong></td>
                  <td class="border-0 align-middle text-center"><form><input type="text" name="amount" maxlength="4" size="4"><br></form></td>
                  <td class="border-0 align-middle text-center"><a href="#" style="font-size:2em; color:red"><i class="fa fa-trash"></i></a></td>
                </tr>
              
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">สรุปรายการสั่งซื้อ </div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">ยอดรวม (จำนวน 2 ชิ้น) </strong><strong>฿500.00</strong></li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">สั่งซื้อ</a>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection
