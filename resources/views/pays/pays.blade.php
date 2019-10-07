@extends('layouts.login')


@section('content')
    <div class="products-container">
            <h1 class="center">แจ้งชำระเงิน</h1>
            <br>
            <h3>รายละเอียดการโอนเงิน</h2>
            <p>*กรุณาเรื่อกธนาคารที่ชำระเงิน</p>
            <tr>
                <td class="inputTD">
                    <table cellpadding="0" cellspacing="0" class="bankList">
                        <tbody>
                            <tr>
                                <td class="checkTD"><input type="radio" name="bank" value="5"></td><td class="bankTD"><img class="gateway_img " src="{{ asset('img/bangkok.png') }}" width="24" height="24"></td>
                                <td class="banknameTD">ธนาคารกรุงเทพ</td>
                                <td class="numberTD">0123456789</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td class="checkTD"><input type="radio" name="bank" value="5"></td><td class="bankTD"><img class="gateway_img " src="{{ asset('img/krungthai.png') }}" width="24" height="24"></td>
                                <td class="banknameTD">ธนาคารกรุงไทย</td>
                                <td class="numberTD">0123456789</td>
                                <td>...</td>
                                </tr>
                            <tr>
                                <td class="checkTD"><input type="radio" name="bank" value="5"></td><td class="bankTD"><img class="gateway_img " src="{{ asset('img/scb.png') }}" width="24" height="24"></td>
                                <td class="banknameTD">ธนาคารไทยพาณิชย์</td>
                                <td class="numberTD">0123456789</td><td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <br>
            <td class="nameTD">ชื่อผู้ชำระเงิน* :</td>
            <div class="form-group col-md-4">
                <label for="usr">ชื่อ:</label>
                <input type="firstname" class="form-control" id="usr" placeholder="ชื่อ">
                </div>
                <div class="form-group col-md-4">
                <label for="pwd">นามสกุล:</label>
                <input type="lastname" class="form-control" id="pwd" placeholder="นามสกุล">
            </div>

            <tr class="paymentDateTR">
            <td class="nameTD">วันที่ชำระเงิน* :</td>
            <div class="form-group col-md-4">
                <select id="inputState" class="form-control col-md-3">
                    <option selected>วัน</option>
                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                    <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                    <option>21</option><option>22</option><option2>3</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
                </select>
                <select id="inputState" class="form-control col-md-3">
                    <option selected>เดือน</option>
                    <option>มกราคม</option><option>กุมภาพันธ์</option><option>มีนาคม</option><option>เมษายน</option><option>พฤษภาคม</option><option>มิถุนายน</option><option>กรกฎาคม</option><option>สิงหาคม</option><option>กันยายน</option><option>ตุลาคม</option><option>พฤศจิกายน</option><option>ธันวาคม</option>
                </select>
                <select id="inputState" class="form-control col-md-3">
                    <option selected>ปี</option>
                    <option>2019</option><option>2018</option><option>2017</option><option>2016</option><option>2015</option><option>2014</option>
                </select>
            </div>
            <tr class="paymentTimeTR">
            <td class="nameTD">เวลา(โดยประมาณ)* :</td>
            <td class="inputTD"><select name="hour"><option value="">- ชม. -</option><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select>:<select name="min"><option value="">- นาที -</option><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select> น.</td>
            </tr>
            <br>
            <td class="nameTD">จำนวนเงิน* :</td>
            <div class="form-group col-md-3">
             <input type="money" class="form-control" placeholder="จำนวนเงิน">
            </div>
            <td class="nameTD">หลักฐานการชำระเงิน* :</td>
            <td class="inputTD">
                <div id="inform_fileupload_container">
                    <input type="file" name="uploadfile" id="inform_fileupload">
                    <input type="hidden" name="file" value="">
                </div>
            </td>
            <br>
            <button type="accept" class="btn btn-primary active">ยืนยันการชำระเงิน</button>
        </div>

@endsection
