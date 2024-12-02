@extends('layout/main_template')

@section('content')



<h1>Clientes</h1>
<a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Crear Cliente</a></button>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Nombre del Cliente</th>
        <th>Apellido</th>
        <th>Segundo Apellido </th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Acciones</th>
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