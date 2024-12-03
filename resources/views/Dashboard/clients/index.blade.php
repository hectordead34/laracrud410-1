@extends('layout/main_template')

@section('content')



<h1>Clientes</h1>
    <a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Crear Cliente</a></button>
    <a class="btn btn-primary" href="{{route('addresses.create')}}" role="button">Crear Dirección</a>
    <a class="btn btn-primary" href="{{route('addresses.index')}}" role="button">Mostrar Direcciones</a>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Nombre del Cliente</th>
        <th>Apellido</th>
        <th>Segundo Apellido </th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Dirección</th>
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
                <td>{{$c->address->street}}</td>
                <td>{{$c->state}}</td>
                <td>{{$c->town}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route("clients.show", $c)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                    <a class="btn btn-success" href="{{route("clients.edit", $c)}}"  role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger" href="{{route("clients.delete", $c)}}"  role="button"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$clients->links()}} 
@endsection