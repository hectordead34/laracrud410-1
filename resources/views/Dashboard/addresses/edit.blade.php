@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Marcas</h1>

<form action="{{route('brands.update', $address->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Calle</label>
    <input type="text" name="street" value="{{$address->}}">

    <label for="">N° Interior</label>
    <input type="int" name="internal_num" value="{{$address->}}">

    <label for="">N° Exterior</label>
    <input type="int" name="external_num" value="{{$address->}}">

    <label for="">Vecindario</label>
    <input type="text" name="neighborhood" value="{{$address->}}">
    
    <label for="">Ciudad</label>
    <input type="text" name="town" value="{{$address->}}">

    <label for="">Estado</label>
    <input type="text" name="state" value="{{$address->}}">

    <label for="">País</label>
    <input type="text" name="country" value="{{$address->}}">
    
    <label for="">Codigo Postal</label>
    <input type="int" name="postal_code" value="{{$address->}}">

    <label for="">Referencias</label>
    <input type="text" name="references" value="{{$address->}}">
    
    
    <button type="submit">Registrar</button>
</form>

@endsection 