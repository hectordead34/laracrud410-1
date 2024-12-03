@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h2 class="text-center">Eliminación de Venta</h2>
<br>
<form action="{{ route('sales.delete', $sale) }}" method="POST">
    @method('DELETE')
    @csrf
    <h3>¿Quieres eliminar la Venta: {{ $sale->sale_id }}?</h3>
    <a type="button" class="btn btn-success" href="{{ route('sales.index') }}">No</a>
    <button type="submit" class="btn btn-danger">Sí</button>
</form>

@endsection
