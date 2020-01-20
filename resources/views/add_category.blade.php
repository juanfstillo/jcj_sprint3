@extends('layout')
@section('title') Agregar Categorias
@endsection

@section('main')

<div class="card-abm" id="card-abm">
  <div class="container ">
    <div class="row justify-content-center">

    <h1 class="add-cat col-10" id="main-title" style="text-align: left">Nueva categoría</h1>

    <form id='add_categoryform'class="col-8" action="<?=url("/add_category")?>" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="row justify-content-center">
        <label for="file" class="form-label-prod" style="color:#000">Imagen de la Categoria</label>

        <div class="col-md-8">
          <input id="file" type="file" class="file form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" >

          @error('file')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <br>

      <div class="row justify-content-center">
        <label for="name" class="form-label-prod" style="color:#000">Nombre de la Categoria</label>

        <div class="col-md-8">
          <input required name="name" type="text" class="form-control" placeholder="Ej: Zapatillas">
        </div>
      </div>

      <div class="acept-cancel">
        <div class="col-md-12 justify-content-center">
          <button type="submit" id="main-add">Agregar Categoria</button>
          <a href="<?=url("/categoriesabm")?>" id="main-cancel">Cancelar</a>
        </div>
      </div>


      </div>
    </div>
  </div>

    </div>
  </div>


</form>
</div>

@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/add_category.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
