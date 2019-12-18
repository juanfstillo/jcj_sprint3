@extends('layout')

@section('title')
JCJ Tenis | Conocenos
@endsection

@section('main')
  <!-- Header -->

<div class="container">
  <h1 id="main-title" class="white">Acerca de nosotros</h1>
</div>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="card">
      <div class="col-xl-11 col-md-6 mb-4">
        <p class="about-description">
          Somos compañeros que nos conocimos en Digital House y fuimos asignados para trabajar juntos en el trabajo integrador. Elegimos realizar una tienda e-commerce de productos de tenis. <br> Para este proyecto, implementamos HTML, CSS, Bootstrap, PHP, Laravel, Javascript y MySQL.
        </p>
      </div>
    </div>

    <!-- Team Member 1 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/images/clara.jpg" class="card-img-top" alt="Miembro del equipo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0" id="people">Clara Manterola</h5>
          <div class="card-text text-black-50">Diseñadora UX/UI</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/images/juan.jpg" class="card-img-top" alt="Juan Stillo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0" id="people">Juan Stillo</h5>
          <div class="card-text text-black-50">Programador</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="/images/juli.jpg" class="card-img-top" alt="Julieta Bancora">
        <div class="card-body text-center">
          <h5 class="card-title mb-0" id="people">Julieta Bancora</h5>
          <div class="card-text text-black-50">Diseñadora Gráfica</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container -->
@endsection
