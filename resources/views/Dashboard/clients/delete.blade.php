@extends('layout.main_template')

@section('content')

<h1>Confirmación de Eliminación</h1>

<p>¿Estás seguro de que deseas eliminar al cliente <strong>{{ $client->name }} {{ $client->last_name }}</strong>?</p>

<form action="{{ route('clients.destroy', $client) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Sí, Eliminar</button>
</form>

<a href="{{ route('clients.index') }}"><button>Cancelar</button></a>

@endsection
