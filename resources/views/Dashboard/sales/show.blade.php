@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center" style="color: #4CAF50; font-family: 'Poppins', sans-serif; font-size: 2rem;">Detalles de la Venta</h1>
<br>

<div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <h3 style="font-family: 'Poppins', sans-serif; color: #333; font-size: 1.2rem; margin-bottom: 15px;">ID Venta: 
        <span style="font-weight: bold; color: #4CAF50;">{{$sale->sale_id}}</span>
    </h3>

    <h3 style="font-family: 'Poppins', sans-serif; color: #333; font-size: 1.2rem; margin-bottom: 15px;">Cliente: 
        <span style="font-weight: bold; color: #007bff;">{{$sale->client->name}}</span>
    </h3>

    <h3 style="font-family: 'Poppins', sans-serif; color: #333; font-size: 1.2rem; margin-bottom: 15px;">Producto: 
        <span style="font-weight: bold; color: #ff6347;">{{$sale->product->nameProduct}}</span>
    </h3>

    <h3 style="font-family: 'Poppins', sans-serif; color: #333; font-size: 1.2rem; margin-bottom: 20px;">Fecha de Venta: 
        <span style="font-weight: bold; color: #555;">{{$sale->sale_date}}</span>
    </h3>

    

    <div style="text-align: center;">
        <a href="{{ route('sales.index') }}" class="btn" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">Regresar</a>
    </div>
</div>

@endsection
