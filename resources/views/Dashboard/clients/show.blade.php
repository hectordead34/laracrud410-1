@extends('layout.main_template')

@section('content')

<br>
<h1 class="text-center" style="color: #4CAF50; font-family: 'Poppins', sans-serif; font-size: 2rem;">Detalles del Cliente</h1>
<br>

<div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Nombre:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->name }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Apellido:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->last_name }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Segundo Apellido:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->second_last_name }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Correo:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->email }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Teléfono:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->phone }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Estado:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->state }}</span>
    </div>

    <div style="font-family: 'Poppins', sans-serif; color: #333; margin-bottom: 15px;">
        <strong style="font-size: 1.2rem; color: #007bff;">Ciudad:</strong> 
        <span style="font-size: 1.1rem; color: #555;">{{ $client->town }}</span>
    </div>

    <br>
    <div style="text-align: center;">
        <a href="{{ route('clients.index') }}" class="btn" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-right: 10px;">Volver al Listado</a>
        <a href="{{ route('clients.edit', $client) }}" class="btn" style="background-color: #ffc107; color: black; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-right: 10px;">Editar Cliente</a>
        
        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn" style="background-color: #dc3545; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Eliminar Cliente</button>
        </form>
    </div>
</div>

@endsection
