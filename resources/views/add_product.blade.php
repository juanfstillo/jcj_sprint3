@extends('layout')
@section('title') Agregar Productos
@endsection

@section('main')

<div class="card-abm card-abm-prod" id="card-abm">
  <div class="container">
    <div class="row justify-content-center">

    <h1 class="add-cat col-12" id="main-title" style="margin-left: 40px">Nuevo producto</h1>

    <form id="add_productform" class="form-body" action="<?=url("/add_product")?>" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="row justify-content-left">
      <label for="file" class="form-label-prod" style="color:#000">Imagen del Producto</label>
      <input id="file" type="file" class="form-control col-md-8 @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file">

      @error('file')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <br>

    <div class="row justify-content-left">
      <label for="name" class="form-label-prod" style="color:#000">Nombre del Producto</label>

      <input required name="name" type="text" class="form-control col-md-8" placeholder="Ej: Boost Drive X302">
    </div>

    <br>

    <div class="row justify-content-left">
      <label for="description" class="form-label-prod" style="color:#000">Descripción del Producto</label>

      <input required name="description" type="text" class="form-control col-md-8"  placeholder="Raqueta Boost Drive 2018 con tecnologia SlamX03.">
    </div>

    <br>

    <div class="row justify-content-left">
      <label for="price" class="form-label-prod" style="color:#000">Precio</label>

    </div>
    <div>
      <input required name="price" type="text" class="form-control col-md-4"  placeholder="10999">

      <small id="passwordHelpBlock" class="form-text text-muted">
        Sin $ al principio ni decimales
      </small>
    </div>

    <br>

    <div class="row justify-content-left">
      <label for="category_id" class="form-label-prod" style="color:#000">Categoría del Producto</label>

      <select name="category_id" class="form-control col-md-8"  placeholder="Seleccionar">
        <option value="1">RAQUETAS</option>
        <option value="2">PELOTAS</option>
        <option value="3">CUERDAS</option>
        <option value="4">BOLSOS</option>
        <option value="5">ACCESORIOS</option>
      </select>
    </div>

    <br>

    <div class="acept-cancel">
      <div class="col-md-12 justify-content-center">
        <a href="<?=url("/productsabm")?>" id="main-cancel">Cancelar</a>
        <button type="submit" id="main-add">Agregar Producto</button>
      </div>
    </div>

    </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/add_product.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
