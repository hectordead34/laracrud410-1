@extends('layout.main_template')

@section('content')
<h1>Index Marcas</h1>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>
<button><a href="{{route('products.index')}}">Mostrar Producto</a></button>
    <button><a href="{{route('brands.create')}}">Crear Marca</a></button>
    <button><a href="{{route('brands.index')}}">Mostrar Marca</a></button>
<table>
    <thead>
        <th>Nombre de la Marca</th>
        <th>Descripcion de la Marca</th>
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

