@extends('layouts.manager')
@section('content')
    <h1>Edit Pay</h1>
    <form action="{{ action('PaysController@update', ['id' => $pay->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pay-shipping">pay shipping</label>
            <input type="text" class="form-control" id="pay-shipping" name="shipping" value="{{ $pay->shipping }}">
        </div>

    </form>
    
    <button class="btn btn-primary">Update</button>
@endsection