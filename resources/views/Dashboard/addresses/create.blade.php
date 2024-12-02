@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Productos</h1>

<form action="{{route('addresses.store')}}" method="POST">
    @csrf
    <label for="">Nombre de la Marca</label>
    <input type="text" name="brand">
    <label for="">Descripcion</label>
    <input type="text" name="description">


    <button type="submit">Registrar</button>
</form>

@endsection 