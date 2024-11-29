@extends('layout/main_template')

@section('content')
    <h1>Index Productos</h1>
    <br>
    
    <button><a href="{{route('products.create')}}">Crear Producto</a></button>
    <button><a href="{{route('products.index')}}">Mostrar Producto</a></button>
    <button><a href="{{route('brands.create')}}">Crear Marca</a></button>
    <button><a href="{{route('brands.index')}}">Mostrar Marca</a></button>


    <br>
    <table class="table table-bordered border-secondary">
        <thead>
            <th>Nombre del Producto</th>
            <th>Marca</th>
            <th>Descripción </th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{$p->nameProduct}}</td>
                    <td>{{$p->brand->brand}}</td>
                    <td>{{$p->brand->description}}</td>
                    <td>{{$p->stock}}</td>
                    <td>{{$p->unit_price}}</td>
                    <td><img src="image/products/{{$p->imagen}}" width="150" height="110" alt=""></td>
                    <td>
                        <button type="button" class="btn btn-primary" href="{{route("products.show", $p)}}">Mostrar</button>
                        <button><a href="{{route("products.edit", $p)}}">Editar</a></button>
                        <button type="button" class="btn btn-danger"><a href="{{route("products.delete", $p)}}">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}} <!-- Genera los enlaces de cada página --> 
@endsection