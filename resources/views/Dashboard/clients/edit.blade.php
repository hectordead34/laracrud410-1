@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Productos</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('clients.update', $client->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nombre del Cliente</label>
    <input type="text" name="name" value="{{$client->name}}">

    <label for="">Apellido</label>
    <input type="text" name="last_name" value="{{$client->last_name}}">
    
    <label for="">Segundo Apellido</label>
    <input type="text" name="second_last_name" value="{{$client->second_last_name}}">

    <label for="">Correo</label>
    <input type="text" name="email" value="{{$client->email}}">

    <label for="">Telefono</label>
    <input type="text" name="phone" value="{{$client->phone}}">
    
    <label for="">Estado</label>
    <input type="text" name="state" value="{{$client->state}}">

    <label for="">Ciudad</label>
    <input type="text" name="town" value="{{$client->town}}">

    <button type="submit">Registrar</button>
</form>

@endsection 