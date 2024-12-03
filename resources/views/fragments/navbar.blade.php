<style>
    header {
        background: linear-gradient(135deg, rgba(91, 219, 224, 0.9), rgba(72, 194, 172, 0.8));
        padding: 20px 0;
        margin: 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    nav {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    nav p {
        margin: 0;
        display: flex;
        gap: 20px;
    }
    nav p a {
        font-family: 'Arial', 'Helvetica', sans-serif;
        font-size: 20px;
        color: lemonchiffon;
        text-decoration: none;
        padding: 10px 20px;
        transition: all 0.3s ease;
        border-radius: 8px;
    }
    nav p a:hover {
        background-color: orange;
        color: white;
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    nav p a:active {
        background-color: darkorange;
        transform: scale(0.98);
    }
</style>

<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
            <a href="{{route('addresses.index')}}">Direccionee</a>
        </p>
    </nav>
</header>
