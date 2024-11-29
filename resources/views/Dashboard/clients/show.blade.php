@extends('layout.main_template')

@section('content')

<h1>Detalles del Cliente</h1>
<h3>Cliente: {{$client->name}}</h3>
<h3>Apellido: {{$client->last_name}}</h3>
<h3>Segundo Apellido: {{$client->second_last_name}}</h3>
<h3>Email: {{$client->email}}</h3>
<h3>Telefono: {{$client->phone}}</h3>
<h3>Estado: {{$client->state}}</h3>
<h3>Ciudad: {{$client->town}}</h3>
@endsection