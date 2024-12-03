@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles de la dirección</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Calle</td>
            <td>{{$address->street}}</td>
        </tr>
        <tr>
            <td>N° Interior</td>
            <td>{{$address->internal_num}}</td>
        </tr>
        <tr>
            <td>N° Exterior</td>
            <td>{{$address->external_num}}</td>
        </tr>
        <tr>
            <td>Vecindario</td>
            <td>{{$address->neighborhood}}</td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td>{{$address->town}}</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>{{$address->state}}</td>
        </tr>
        <tr>
            <td>País</td>
            <td>{{$address->country}}</td>
        </tr>
        <tr>
            <td>Código Postal</td>
            <td>{{$address->postal_code}}</td>
        </tr>
        <tr>
            <td>Referencia</td>
            <td>{{$address->references}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>


@endsection