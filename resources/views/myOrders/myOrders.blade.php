@extends('layouts.login')

@section('content')


<div class="container">
  <h2>รายการสั่งซื้อ</h2>     
  <table class="table  table-bordered table-hover table-primary">
    <thead>
      <tr>
        <th>รหัสorder</th>
        <th>ราคา</th>
        <th>สถานะ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>014521</td>
        <td>500</td>
        <td class="text-danger">ยังไม่ชำระเงิน</td>
      </tr>
      <tr>
        <td>045221</td>
        <td>200</td>
        <td class="text-success" >อยู่ในสถานะกำลังดำเนินการส่ง</td>
      </tr>

    </tbody>
  </table>
</div>
@endsection
