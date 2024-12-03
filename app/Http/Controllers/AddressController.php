<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Addresses\StoreRequest;
use App\Http\Requests\Addresses\UpdateRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $addresses = Address::paginate(3); // Paginar los resultados por 4 en 4
        return view('Dashboard.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Dashboard.addresses.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
    
        Address::create($request->all()); // Crear la dirección
        return to_route('addresses.index')->with('status', 'Dirección Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
        //$address = Address::find($id);
        return view('Dashboard.addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
        $addresses = Address::pluck('id', 'street'); // Obtener todas las direcciones
        return view('Dashboard.addresses.edit', compact('address', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Address $address)
    {
        //
        $address->update($request->all()); // Actualizar cliente con datos validados
        return to_route('addresses.index')->with('status', 'Direccion Actualizada');
    }

    public function delete(Address $address)
    {
        echo view('Dashboard.addresses.delete', compact('address'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
        $address->delete(); // Eliminar cliente
        return to_route('clients.index')->with('status', 'Direccion Eliminada');
    }
}