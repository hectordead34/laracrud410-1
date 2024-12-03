<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::paginate(4);
        return view("Dashboard/addresses/index", compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Dashboard/addresses/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Address::create($request->all());
        return to_route('addresses.index')->with('status', 'Dirección Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('Dashboard/addresses/show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        echo view ('Dashboard/addresses/edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Address $address)
    {
        $address->update($request->all());
        return to_route('addresses.index') -> with ('status' , 'Dirección Actualizado');
    }

    public function delete(Address $address){
        echo view ('Dashboard/addresses/delete', compact('address'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return to_route('addresses.index')->with('status', 'Dirección Eliminada');
    }
}
