@extends('layout/main_template')

@section('content')
    <style>
        
        .container {
            margin: 40px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #343a40;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .button-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button-container button a {
            text-decoration: none;
            color: white;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        td img {
            border-radius: 5px;
        }
        td button {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        td button a {
            text-decoration: none;
            color: white;
        }

        td button:hover {
            background-color: #495057;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 15px;
        }
    </style>

    <div class="container">
        <h1>Index Productos</h1>

        <div class="button-container d-flex justify-content-around">
            <button><a href="{{ route('products.create') }}">Crear Producto</a></button>
            <button><a href="{{ route('products.index') }}">Mostrar Producto</a></button>
            <button><a href="{{ route('brands.create') }}">Crear Marca</a></button>
            <button><a href="{{ route('brands.index') }}">Mostrar Marca</a></button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td>{{ $p->nameProduct }}</td>
                        <td>{{ $p->brand->brand }}</td>
                        <td>{{ $p->brand->description }}</td>
                        <td>{{ $p->stock }}</td>
                        <td>${{ number_format($p->unit_price, 2) }}</td>
                        <td><img src="image/products/{{ $p->imagen }}" width="150" height="110" alt=""></td>
                        <td>
                            <button><a href="{{ route('products.show', $p) }}">Mostrar</a></button>
                            <button><a href="{{ route('products.edit', $p) }}">Editar</a></button>
                            <button><a href="{{ route('products.delete', $p) }}" onclick="return confirm('¿Seguro que deseas eliminar este producto?');">Eliminar</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
@endsection
