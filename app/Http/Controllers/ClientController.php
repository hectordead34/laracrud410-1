<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();  
        return view('Dashboard/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'second_last_name' => 'nullable|string|max:255',
        'email' => 'required|email|unique:clients,email',
        'phone' => 'required|numeric',
        'state' => 'required|string|max:255',
        'town' => 'required|string|max:255',
    ]);
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
        return view('Dashboard/clients/edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|numeric',
            'state' => 'required|string|max:255',
            'town' => 'required|string|max:255',
        ]);
        $client->update($request->all());
         return to_route('clients.index')->with('status', 'Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clients.index')->with('status', 'Cliente Eliminado');
    }
}
