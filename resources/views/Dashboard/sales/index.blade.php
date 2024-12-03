@extends('layout.main_template')

@section('content')
<br>
<h2 class="text-center" style="color: #4CAF50; font-family: 'Poppins', sans-serif; font-size: 1.8rem;">Lista de Ventas</h2>
<br>
<div style="text-align: center; margin-bottom: 20px;">
    <a class="btn btn-primary" href="{{ route('sales.create') }}" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">Registrar Venta</a>
</div>
<br>

<table class="table table-success table-striped-columns" style="width: 80%; margin: 0 auto; border-collapse: collapse; font-family: 'Poppins', sans-serif;">
    <thead>
        <tr style="background-color: #4CAF50; color: white;">
            <th style="padding: 10px; border: 1px solid #ddd;">ID Venta</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Cliente</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Producto</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Fecha de Venta</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr style="text-align: center;">
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sale->sale_id }}</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sale->client->name }}</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sale->product->nameProduct }}</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $sale->sale_date }}</td>
            <td style="padding: 10px; border: 1px solid #ddd;">
                <a class="btn btn-primary" href="{{ route('sales.show', $sale) }}" style="background-color: #007bff; color: white; padding: 5px 10px; border-radius: 5px;">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <a class="btn btn-warning" href="{{ route('sales.edit', $sale) }}" style="background-color: #ffc107; color: black; padding: 5px 10px; border-radius: 5px;">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <form action="{{ route('sales.delete', $sale) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: white; padding: 5px 10px; border-radius: 5px; border: none;">
                        <i class="fa-solid fa-x"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
