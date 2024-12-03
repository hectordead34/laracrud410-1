@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h1 class="text-center">Creación de Dirección</h1>
<br>

@if ($errors->any())
    <div class="error-container">
        @foreach ($errors->all() as $e)
            <div class="error-message">
                <i class="fa-solid fa-exclamation-circle"></i> {{ $e }}
            </div>
        @endforeach
    </div>
@endif

<form action="{{ route('addresses.store') }}" method="POST" class="form-container">
    @csrf

    <label for="client_id">Id Cliente:</label>
    <input type="text" name="client_id" placeholder="Ingrese el ID del cliente">

    <label for="street">Calle:</label>
    <input type="text" name="street" placeholder="Ingrese la calle">

    <label for="internal_num">Num. Interior:</label>
    <input type="text" name="internal_num" placeholder="Ingrese el número interior">

    <label for="external_num">Num. Exterior:</label>
    <input type="text" name="external_num" placeholder="Ingrese el número exterior">

    <label for="neightbornhood">Colonia:</label>
    <input type="text" name="neightbornhood" placeholder="Ingrese la colonia">

    <label for="town">Ciudad:</label>
    <input type="text" name="town" placeholder="Ingrese la ciudad">

    <label for="state">Estado:</label>
    <input type="text" name="state" placeholder="Ingrese el estado">

    <label for="country">País:</label>
    <input type="text" name="country" placeholder="Ingrese el país">

    <label for="postal_code">Código Postal:</label>
    <input type="text" name="postal_code" placeholder="Ingrese el código postal">

    <label for="references">Referencias:</label>
    <input type="text" name="references" placeholder="Ingrese referencias adicionales">

    <button type="submit" class="btn-submit">Registrar</button>
</form>

@endsection
