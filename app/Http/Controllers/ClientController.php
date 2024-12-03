<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Http\Requests\Clients\StoreRequest;
use App\Http\Requests\Clients\UpdateRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(4);
        return view ('Dashboard/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $addresses = Address::pluck('id','street');
        return view('Dashboard/clients/create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Client::create($request->all());
        return to_route('clients.index')->with('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('Dashboard/clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $addresses = Address::pluck('id','street');
        echo view ('Dashboard/clients/edit', compact('client','addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return to_route('clients.index') -> with('status', 'Cliente Actualizado');
    }

    public function delete(Client $client){
        echo view ('Dashboard/clients/delete', compact('client'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clients.index')->with('status', 'Client Eliminado');
    }
}
