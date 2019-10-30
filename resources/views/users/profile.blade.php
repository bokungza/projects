@extends('layouts.master')

@section('content')
<div class="container emp-profile  bg-secondary text-white">
            <form method="post">
                <div class="row">

                    <div class="col-md-10">
                        <div class="profile-head">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $user->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Firstname</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $user->first_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lastname</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $user->last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                      <div>
                        <a class = "btn btn-dark" href="{{route('profile.edit')}}">Edit</a><br><br></div>

                    </div>
                </div>

            </form>
        </div>
        @isset($address)
        <div class="card">
          <h5 class="card-header">ที่อยู่(แก้ไขล่าสุด:{{$address->created_at}})</h5>
          <div class="card-body">

            <p class="card-text">{{$address->house_address}} ถนน{{$address->street}} แขวง/ตำบล{{$address->sub_district}} เขต/อำเภอ{{$address->district}} {{$address->province}} {{$address->zip_code}}</p>

            <form action="{{ route('addresses.destroy',['address'=>$address->id]) }}" method = 'post'>

                <p class ='text-right'><a href="{{ action('AddressesController@edit', [$address->id]) }}" class="btn btn-warning">แก้ไข </a></p>
            </form>
          </div>
        </div>
        @endisset
        @empty($address)
        <p class = "text-right"><a class="btn btn-outline-success " href="{{route('addresses.create')}}" role="button">เพิ่มที่อยู่</a></p>
        @endempty


@endsection
