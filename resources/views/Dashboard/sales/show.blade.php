@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles de la Venta</th>
        <th></th>
    </thead>
    <tbody>
        <tr style="align=center; bottom:middle">
            <td>Cliente</td>
            <td>{{$sale->client->name}}</td>
        </tr>
        <tr>
            <td>Producto</td>
            <td>{{$sale->product->nameProduct}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$sale->sale_date}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

@endsection