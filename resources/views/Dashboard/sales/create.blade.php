@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h1 class="text-center">Registrar una Venta</h1>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{ $e }}
        </div>
    @endforeach
@endif

<form action="{{ route('sales.store') }}" method="POST" style="width: 40%; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    @csrf

    <div style="margin-bottom: 15px;">
        <label for="client_id" style="display: block; font-weight: bold; margin-bottom: 5px;">Cliente</label>
        <select name="client_id" id="client_id" required style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="" disabled selected>Seleccione un cliente</option>
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="product_id" style="display: block; font-weight: bold; margin-bottom: 5px;">Producto</label>
        <select name="product_id" id="product_id" required style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="" disabled selected>Seleccione un producto</option>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->nameProduct }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-bottom: 15px;">
        <label for="sale_date" style="display: block; font-weight: bold; margin-bottom: 5px;">Fecha de Venta</label>
        <input type="date" name="sale_date" id="sale_date" required style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            Registrar Venta
        </button>
    </div>
</form>

@endsection
