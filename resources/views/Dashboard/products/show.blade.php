@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del Producto</th>
        <th></th>
    </thead>
    <tbody>
        <tr style="align=center; bottom:middle">
            <td>Producto</td>
            <td>{{$product->nameProduct}}</td>
        </tr>
        <tr>
            <td>Cantidad</td>
            <td>{{$product->stock}}</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>{{$product->unit_price}}</td>
        </tr>
        <tr>
            <td>Imagen</td>
            <td><img src="image/products/{{$product->imagen}}" width="100" height="100" alt=""></td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection