@extends('layout.main_template')

@section('content')
<h1>Direcciones</h1>
<br>
    <a class="btn btn-primary" href="{{route('addresses.create')}}" role="button">Crear Dirección</a></button>
    <a class="btn btn-primary" href="{{route('clients.index')}}" role="button">Mostrar Clientes</a>
<br>
<br>
    <table class="table table-bordered table-striped">
    <thead>
        <th>Nombre de la Calle</th>
        <th>N° Interior</th>
        <th>N° Exterior</th>
        <th>Vecindario</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>País</th>
        <th>Codigo Postal</th>
        <th>Referencias</th>
        <th>Acciones    </th>
    </thead>
    <tbody>
        @foreach ($addresses as $a)
                <tr>
                    <td>{{$a->street}}</td>
                    <td>{{$a->internal_num}}</td>
                    <td>{{$a->external_num}}</td>
                    <td>{{$a->neighborhood}}</td>
                    <td>{{$a->town}}</td>
                    <td>{{$a->state}}</td>
                    <td>{{$a->country}}</td>
                    <td>{{$a->postal_code}}</td>
                    <td>{{$a->references}}</td>
                    <td>
                            <a class="btn btn-primary" href="{{route("addresses.show", $a)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                            <a class="btn btn-success" href="{{route("addresses.edit", $a)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger" href="{{route("addresses.delete", $a)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>
{{$addresses->links()}}
@endsection