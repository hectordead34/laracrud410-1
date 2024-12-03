@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles de la marca</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Marca</td>
            <td>{{$brand->brand}}</td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td>{{$brand->description}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>


@endsection