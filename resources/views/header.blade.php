<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">
    <img id="logo" src='/images/logoblanco.svg' alt='Reebok logo' />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item">
          <a class="nav-link text-light" href="/login">Entrar</a>
        </li>
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('cart') }}">Carrito</a>
            <a class="dropdown-item" href="{{ route('orders') }}">Mis órdenes</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
          </div>
        </li>
      @endguest
    </ul>
  </div>
</nav>
