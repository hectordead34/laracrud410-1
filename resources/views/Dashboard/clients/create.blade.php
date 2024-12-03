@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Clientes</h1>

<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <label for="">Nombre del Cliente</label>
    <input type="text" name="name">

    <label for="">Apellido</label>
    <input type="text" name="last_name">

    <label for="">Segundo Apellido</label>
    <input type="text" name="second_last_name">

    <label for="">Correo</label>
    <input type="text" name="email">
    
    <label for="">Telefono</label>
    <input type="number" name="phone">

    <label for="">Dirección</label>
    <select name= "address_id">
        <option value="">Selecciona. . .</option>
            @foreach ($addresses as $address => $id )
                <option value="{{$id}}">{{$address}}</option>
            @endforeach
    </select>

    <label for="">Estado</label>
    <input type="text" name="state">

    <label for="">Ciudad</label>
    <input type="text" name="town">

    <button type="submit">Registrar</button>
</form>

@endsection 