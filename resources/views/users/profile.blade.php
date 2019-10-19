@extends('layouts.login')

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
                                                <p>{{ Auth::user()->username }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Firstname</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ Auth::user()->first_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lastname</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ Auth::user()->last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                      <div>
                        <a class = "btn btn-outline-primary" href="/profile/edit">Edit</a><br><br></div>
                        <div>
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="แก้ไขที่อยู่"></div>
                    </div>
                </div>

            </form>
        </div>

@endsection
