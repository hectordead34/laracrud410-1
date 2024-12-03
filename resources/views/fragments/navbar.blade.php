<!-- <style>
    header{
        background-color: rgba(240, 144, 54, 0.8);
        padding-block: 20px;
        margin-block: -8px;
        margin-inline: -8px;
        position: sticky;
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
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>
    </nav>
</header> -->

<!-- NAVBAR de Bootstrap-->

<nav class="navbar navbar-expand-lg" style="background-color:rgb(119, 204, 164)">
    <div class="container-fluid">
      <h3 class="navbar-brand"><i class="fa-brands fa-weibo"></i> Tiendita</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}"><i class="fa-solid fa-house"></i> Inicio</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}"><i class="fa-solid fa-cart-shopping"></i> Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}"><i class="fa-solid fa-user"></i>Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}"><i class="fa-solid fa-tag"></i> Ventas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>