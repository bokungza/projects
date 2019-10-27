<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'house_address' => [ 'string', 'min:1'],
        'street' => [ 'string', 'min:1'],
        'direct' => [ 'string', 'min:1'],
        'province' => [ 'string', 'min:3'],
        'sub_district' => [ 'string', 'min:3'],
        'zip_code' => [ 'integer', 'min:5'],


      ]);
      $address = new Address;
      $address->user_id = Auth::user()->id;
      $address->house_address = $validatedData['house_address'];
      $address->street = $validatedData['street'];
      $address->direct = $validatedData['direct'];
      $address->province = $validatedData['province'];
      $address->sub_district = $validatedData['sub_district'];
      $address->zip_code = $validatedData['zip_code'];
      $address->save();
      return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
        'house_address' => [ 'string', 'min:1'],
        'street' => [ 'string', 'min:1'],
        'direct' => [ 'string', 'min:1'],
        'province' => [ 'string', 'min:3'],
        'sub_district' => [ 'string', 'min:3'],
        'zip_code' => [ 'integer', 'min:5'],


      ]);
      $address = new Address;
      $address->user_id = Auth::user()->id;
      $address->house_address = $validatedData['house_address'];
      $address->street = $validatedData['street'];
      $address->direct = $validatedData['direct'];
      $address->province = $validatedData['province'];
      $address->sub_district = $validatedData['sub_district'];
      $address->zip_code = $validatedData['zip_code'];
      $address->save();
      return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
