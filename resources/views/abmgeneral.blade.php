@extends('layout')
@section('title')  JCJ TENIS | TENIS
@endsection

@section('main')
<div class="container">
  <div class="row">
    <div class="col-6 my-2">
    <a href="<?=url("/productsabm")?>" class="">Abm de Productos</a>
    <p>Modifica tus productos, agrega nuevos y elimina aquellos que desees.</p>
    </div>

    <div class="col-6 my-2">
    <a href="<?=url("/categoriesabm")?>" class="">Abm de Categorias</a>
    <p>Modifica tus categorias, agrega nuevas y elimina aquellas que desees.</p>

  </div>

  </div>

</div>

@endsection

@section('scripts')

@endsection
