@extends('layout/main_template')

@section('content')


    <h1>Ventas</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('sales.create')}}" role="button">Crear Ventas</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <th>ID Venta</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($sales as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->client->name}}</td>
                    <td>{{$s->product->nameProduct}}</td>
                    <td>{{$s->product->unit_price}}</td>
                    <td>{{$s->sale_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("sales.show", $s)}}" role="button">Mostrar</a>
                        <a class="btn btn-success" href="{{route("sales.edit", $s)}}" role="button">Editar</a>
                        <a class="btn btn-danger" href="{{route("sales.destroy", $s)}}" role="button">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$sales->links()}} <!-- Genera los enlaces de cada página --> 
@endsection