@extends('layout/main_template')

@section('content')


    <h1>Productos</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('products.create')}}" role="button">Crear Producto</a>
    <a class="btn btn-primary" href="{{route('brands.create')}}" role="button">Crear Marca</a>
    <a class="btn btn-primary" href="{{route('brands.index')}}" role="button">Mostrar Marcas</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
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
                        <a class="btn btn-primary" href="{{route("products.show", $p)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("products.edit", $p)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("products.delete", $p)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}} <!-- Genera los enlaces de cada página --> 
@endsection