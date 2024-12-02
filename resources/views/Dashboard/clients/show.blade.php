@extends('layout.main_template')

@section('content')

<table class="table" >
    <thead class="table-dark">
        <th><th>Detalles del Cliente</th></th>
    </thead>
    <tbody>
        <tr>
            <td>Cliente:</td>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td>{{$client->last_name}}</td>
        </tr>
    </tbody>
</table>

<h3></h3>
<h3> </h3>
<h3>Segundo Apellido: {{$client->second_last_name}}</h3>
<h3>Email: {{$client->email}}</h3>
<h3>Telefono: {{$client->phone}}</h3>
<h3>Estado: {{$client->state}}</h3>
<h3>Ciudad: {{$client->town}}</h3>
@endsection