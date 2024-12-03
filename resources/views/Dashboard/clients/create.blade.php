@extends('layout.main_template')

@section('content')

<h1 style="text-align: center; color: #4CAF50; font-family: 'Arial', sans-serif; font-size: 1.5rem;">Crear Cliente</h1>

<form action="{{ route('clients.store') }}" method="POST" style="width: 40%; margin: 0 auto; background-color: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    @csrf

    <div style="margin-bottom: 10px;">
        <label for="name" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="last_name" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Apellido</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="second_last_name" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Segundo Apellido</label>
        <input type="text" name="second_last_name" id="second_last_name" value="{{ old('second_last_name') }}" style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="email" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Correo</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="phone" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Teléfono</label>
        <input type="number" name="phone" id="phone" value="{{ old('phone') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="state" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Estado</label>
        <input type="text" name="state" id="state" value="{{ old('state') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="town" style="display: block; font-size: 0.9rem; margin-bottom: 3px;">Ciudad</label>
        <input type="text" name="town" id="town" value="{{ old('town') }}" required style="width: 100%; padding: 8px; font-size: 0.9rem; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="text-align: center;">
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 8px 16px; font-size: 0.9rem; border: none; border-radius: 5px; cursor: pointer;">Registrar</button>
    </div>
</form>

@endsection
