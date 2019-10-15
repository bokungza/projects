@extends('layouts.login')


@section('content')
<div class="products-container">
    <h1>ข้อมูลของฉัน</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
        <img class="avatar" src="{{ asset('img/avatar.png') }}">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        
        <form class="form-horizontal" role="form">
         
          <div class="form-group">
                             
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:Zelos</strong>
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:Kadeeroj</strong>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:702/12 phahonyotin</strong></div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:10900</strong></div>
                        
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:09-xxxxxxxx</strong></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Address:xxx_xxx@hotmail.com</strong></div>
                            </div><a href="manage">แก้ไข</a>
          
          </div>
        </form>
        
      </div>
  </div>
</div>
<hr>

@endsection
