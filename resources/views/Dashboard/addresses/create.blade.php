@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Direcciones</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('addresses.store')}}" method="POST">
    @csrf
    <label for="">Calle</label>
    <input type="text" name="street">

    <label for="">N° Interior</label>
    <input type="int" name="internal_num">

    <label for="">N° Exterior</label>
    <input type="int" name="external_num">

    <label for="">Vecindario</label>
    <input type="text" name="neighborhood">
    
    <label for="">Ciudad</label>
    <input type="text" name="town">

    <label for="">Estado</label>
    <input type="text" name="state">

    <label for="">País</label>
    <input type="text" name="country">
    
    <label for="">Codigo Postal</label>
    <input type="int" name="postal_code">

    <label for="">Referencias</label>
    <input type="text" name="references">


    <button type="submit">Registrar</button>
</form>

@endsection 