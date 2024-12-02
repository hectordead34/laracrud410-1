@extends('layout.main_template')

@section('content')
<h1>Index Marcas</h1>
<br>
    <a class="btn btn-primary" href="{{route('brands.create')}}" role="button">Crear Marca</a></button>
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
                        <button><a href="{{route("brands.edit", $b)}}">Editar</a></button>
                        <form action="{{route('brands.destroy', $b)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection

