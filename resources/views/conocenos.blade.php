@extends('layout')

@section('title')
JCJ Tenis | Conocenos
@endsection

@section('main')
  <!-- Header -->
<header class="bg-warning text-center py-4">
  <div class="container">
    <p class="font-weight-light text-black h1 mb-0">Conocenos</p>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 my-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="Miembro del equipo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Clara Manterola</h5>
          <div class="card-text text-black-50">CEO</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 my-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="Miembro del equipo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Juan Stillo</h5>
          <div class="card-text text-black-50">STRINGER</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 my-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="Miembro del equipo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Julieta Bancora</h5>
          <div class="card-text text-black-50">VENDEDOR</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 my-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="Miembro del equipo">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Patricio Giusti</h5>
          <div class="card-text text-black-50">VENDEDOR</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
