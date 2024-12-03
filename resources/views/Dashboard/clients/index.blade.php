@extends('layout.main_template')

@section('content')

<h1 style="text-align: center; color: #4CAF50; font-family: 'Arial', sans-serif;">Clientes</h1>

<div style="text-align: center; margin-bottom: 20px;">
    <a href="{{ route('clients.create') }}" style="text-decoration: none;">
        <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">Crear Cliente</button>
    </a>
    <a href="{{ route('clients.index') }}" style="text-decoration: none;">
        <button style="background-color: #2196F3; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Mostrar Clientes</button>
    </a>
</div>

<table style="width: 80%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Nombre del Cliente</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Apellido</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Segundo Apellido</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Correo</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Teléfono</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Estado</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Ciudad</th>
            <th style="padding: 15px; text-align: left; border-bottom: 2px solid #ddd;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->name }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->last_name }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->second_last_name }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->email }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->phone }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->state }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $client->town }}</td>
                <td style="padding: 15px; border-bottom: 1px solid #ddd;">
                    <a href="{{ route('clients.show', $client) }}" style="text-decoration: none;">
                        <button style="background-color: #03A9F4; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Mostrar</button>
                    </a>
                    <a href="{{ route('clients.edit', $client) }}" style="text-decoration: none;">
                        <button style="background-color: #FFC107; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Editar</button>
                    </a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" style="background-color: #F44336; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
