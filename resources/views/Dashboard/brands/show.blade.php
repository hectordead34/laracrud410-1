@extends('layout.main_template')

@section('content')
    <style>
        /* Contenedor principal */
        .container {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        /* Título */
        h1 {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Botones */
        .button-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .button-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button-container button a {
            color: white;
            text-decoration: none;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }

        /* Tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f1f1f1;
            color: #333;
        }

        td {
            color: #555;
        }

        td button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        td form button {
            background-color: #dc3545;
            font-size: 0.9rem;
        }

        td button:hover {
            background-color: #218838;
        }

        td form button:hover {
            background-color: #c82333;
        }
    </style>

    <div class="container">
        <h1>Index Marcas</h1>

        <div class="button-container">
            <button><a href="{{ route('products.create') }}">Crear Producto</a></button>
            <button><a href="{{ route('products.index') }}">Mostrar Producto</a></button>
            <button><a href="{{ route('brands.create') }}">Crear Marca</a></button>
            <button><a href="{{ route('brands.index') }}">Mostrar Marca</a></button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nombre de la Marca</th>
                    <th>Descripción de la Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $b)
                    <tr>
                        <td>{{ $b->brand }}</td>
                        <td>{{ $b->description }}</td>
                        <td>
                            <button><a href="{{ route('brands.edit', $b) }}">Editar</a></button>
                            <form action="{{ route('brands.destroy', $b) }}" method="POST" style="display:inline;">
                                @method("DELETE")
                                @csrf
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
