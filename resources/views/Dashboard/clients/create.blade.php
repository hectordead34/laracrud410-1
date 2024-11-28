@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Clientes</h1>

<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <label for="">Nombre del Cliente</label>
    <input type="text" name="nameProduct">

    <label for="">Apellido</label>
    <input type="text" name="nameProduct">

    <label for="">Segundo Apellido</label>
    <input type="text" name="nameProduct">

    <label for="">Correo</label>
    <input type="text" name="stock">
    
    <label for="">Telefono</label>
    <input type="number" name="unit_price">

    <label for="">Estado</label>
    <input type="text" name="imagen">

    <label for="">Town</label>
    <input type="text" name="nameProduct">

    <button type="submit">Registrar</button>
</form>

@endsection 