@extends('layout.main_template')

@section('content')
<br>
<h2 class="text-center">Lista de Direcciones</h2>
<br>

<!-- Botón para registrar una nueva dirección -->
<div class="text-center mb-3">
    <a href="{{ route('addresses.create') }}" class="btn btn-success btn-lg">
        <i class="fa-solid fa-plus"></i> Registrar Nueva Dirección
    </a>
</div>

<table class="table table-striped table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Calle</th>
            <th>Num. Interior</th>
            <th>Num. Exterior</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>País</th>
            <th>Código Postal</th>
            <th>Referencias</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses as $address)
        <tr>
            <td>{{ $address->client_id }}</td>
            <td>{{ $address->street }}</td>
            <td>{{ $address->internal_num }}</td>
            <td>{{ $address->external_num }}</td>
            <td>{{ $address->neightbornhood }}</td>
            <td>{{ $address->town }}</td>
            <td>{{ $address->state }}</td>
            <td>{{ $address->country }}</td>
            <td>{{ $address->postal_code }}</td>
            <td>{{ $address->references }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('addresses.show', $address) }}">
                    <i class="fa-solid fa-eye"></i> Ver
                </a>
                <a class="btn btn-warning btn-sm" href="{{ route('addresses.edit', $address) }}">
                    <i class="fa-solid fa-file-signature"></i> Editar
                </a>
                <form action="{{ route('addresses.destroy', $address) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash"></i> Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .table {
        margin: 0 auto;
        width: 90%;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        border-collapse: separate;
    }

    .table th, .table td {
        padding: 12px;
        vertical-align: middle;
        border: 1px solid #dee2e6;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    .table-dark th {
        background-color: #343a40;
        color: white;
    }

    .btn {
        margin: 2px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-sm {
        font-size: 14px;
        padding: 5px 10px;
    }

    .btn:hover {
        opacity: 0.85;
    }

    h2 {
        font-size: 28px;
        color: #333;
    }

    .text-center {
        text-align: center;
    }
</style>

@endsection
