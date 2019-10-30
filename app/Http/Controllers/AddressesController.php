<?php

namespace App\Http\Controllers;
use Auth;
use App\Address;
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


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $address = new Address;
      $address->user_id =  Auth::user()->id;
      $address->house_address = $request->input('house_address');
      $address->street = $request->input('street');
      $address->province = $request->input('province');
      $address->sub_district = $request->input('sub_district');
      $address->district = $request->input('district');
      $address->zip_code = $request->input('zip_code');
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
      $address = Address::findOrFail($id);
      return view('addresses.edit', ['address' => $address]);
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
      $address = Address::findOrFail($id);
      $address->user_id =  Auth::user()->id;
      $address->house_address = $request->input('house_address');
      $address->street = $request->input('street');
      $address->province = $request->input('province');
      $address->sub_district = $request->input('sub_district');
      $address->district = $request->input('district');
      $address->zip_code = $request->input('zip_code');
      $address->save();
      return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
      
    }
}
