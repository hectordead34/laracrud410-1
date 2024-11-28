@extends('layout/main_template')

@section('content')



<h1>Clientes</h1>
<button><a href="{{route('clients.create')}}">Crear Cliente</a></button>
<button><a href="{{route('clients.index')}}">Mostrar Cliente</a></button>
<br>
<br>
<table>
    <thead>
        <th>Nombre del Cliente</th>
        <th>Apellido</th>
        <th>Segundo Apellido </th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        @foreach ($clients as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->second_last_name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->state}}</td>
                <td>{{$c->town}}</td>
                <td>
                    <button><a href="{{route("clients.show", $c)}}">Mostrar</a></button>
                    <button><a href="{{route("clients.edit", $c)}}">Editar</a></button>
                    <button><a href="{{route("clients.destroy", $c)}}">Eliminar</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection