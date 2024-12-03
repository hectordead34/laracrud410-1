@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del Cliente</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Cliente</td>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td>{{$client->last_name}}</td>
        </tr>
        <tr>
            <td>Segundo Apellido</td>
            <td>{{$client->second_last_name}}</td>
        </tr>
        <tr>
            <td>Correo</td>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td>{{$client->address->street}}</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>{{$client->state}}</td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td>{{$client->town}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

@endsection