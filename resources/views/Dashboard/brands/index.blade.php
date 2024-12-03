@extends('layout/main_template')

@section('content')
<h1>Marcas</h1>
<br>
    <a class="btn btn-primary" href="{{route('brands.create')}}" role="button">Crear Marca</a></button>
    <a class="btn btn-primary" href="{{route('products.index')}}" role="button">Mostrar Productos</a>
<br>
<br>

<table class="table table-bordered table-striped">
    <thead>
        <th>Nombre de la Marca</th>
        <th>Descripcion de la Marca</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($brands as $b)
                <tr>
                    <td>{{$b->brand}}</td>
                    <td>{{$b->description}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("brands.show", $b)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("brands.edit", $b)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("brands.delete", $b)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>
{{$brands->links()}}
@endsection