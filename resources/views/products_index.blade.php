@extends('layout/main_template')

@section('content')
    <h1>Index Productos</h1>
    <br>
    <button><a href="{{route('products.create')}}">Crear Producto</button>
    <br>
@endsection