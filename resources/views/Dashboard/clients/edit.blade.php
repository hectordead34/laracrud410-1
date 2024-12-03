@extends('layout.main_template')

@section('content')

<h1 style="text-align: center; color: #4CAF50; font-family: 'Poppins', sans-serif; font-size: 1.8rem; margin-bottom: 20px;">Editar Cliente</h1>

<form action="{{ route('clients.update', $client) }}" method="POST" style="width: 35%; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);">
    @csrf
    @method('PUT')

    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Nombre</label>
        <input type="text" id="name" name="name" value="{{ $client->name }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="last_name" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Apellido</label>
        <input type="text" id="last_name" name="last_name" value="{{ $client->last_name }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="second_last_name" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Segundo Apellido</label>
        <input type="text" id="second_last_name" name="second_last_name" value="{{ $client->second_last_name }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Correo</label>
        <input type="email" id="email" name="email" value="{{ $client->email }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="phone" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Teléfono</label>
        <input type="text" id="phone" name="phone" value="{{ $client->phone }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="state" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Estado</label>
        <input type="text" id="state" name="state" value="{{ $client->state }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="town" style="display: block; font-size: 1rem; font-weight: 600; margin-bottom: 5px; color: #333;">Ciudad</label>
        <input type="text" id="town" name="town" value="{{ $client->town }}" required style="width: 100%; padding: 10px; font-size: 0.95rem; border: 1px solid #ddd; border-radius: 5px;">
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
            Actualizar Cliente
        </button>
    </div>
</form>

@endsection
