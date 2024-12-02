@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Crear Ventas</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('sales.store')}}" method="POST">
    @csrf
    <label for="">Client</label>
    <select name= "client_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $clients as $client => $id )
                <option value="{{$id}}">{{$client}}</option>
            @endforeach
    </select>
    <br>
    <br>

    <label for="">Producto</label>
    <select name= "product_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $products as $product => $id )
                <option value="{{$id}}">{{$product}}</option>
            @endforeach
    </select>
    <br>
    <br>
    
    <label for="">Fecha</label>
    <input type="date" name="sale_date">

    <button type="submit">Registrar</button>
</form>

@endsection 