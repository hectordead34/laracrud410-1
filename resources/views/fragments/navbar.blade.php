<style>
    header{
        background-color: rgba(240, 144, 54, 0.8);
        padding-block: 20px;
        margin-block: -8px;
        margin-inline: -8px;
    }
    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }
    nav p a{
        color: lemonchiffon;
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }
    nav p a:hover{
        background: orange;
        padding-block: 20px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products')}}">Productos</a>
            <a href="{{route('clients')}}">Clientes</a>
            <a href="{{route('sales')}}">Ventas</a>
        </p>
    </nav>
</header>