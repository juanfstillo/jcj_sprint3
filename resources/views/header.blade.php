<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">
    <img id="logo" src='/images/logo.svg' alt='JCJ logo' />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item">
          <a class="nav-link text-dark" href="/login">Ingresar</a>
        </li>
      @elseif(Auth::user()->is_admin == 1)
        <div class="imagenavatar">
          <img src="/storage/{{ Auth::user()->avatar }}" alt="Foto de perfil" >
        </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="{{ route('abmgeneral') }}">ABM </a> --}}
            
            <a class="dropdown-item" href="{{ route('categoriesabm') }}">ABM de Categorías</a>
            <a class="dropdown-item" href="{{ route('productsabm') }}">ABM de Productos</a>

            <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
          </div>
        </li>
      @else
        <div class="imagenavatar">
          <img src="/storage/{{ Auth::user()->avatar }}" alt="Foto de perfil" >
        </div>
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
