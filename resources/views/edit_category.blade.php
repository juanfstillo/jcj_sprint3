@extends('layout')
@section('title') Editar {{$category->name}}
@endsection

@section('main')

<div class="card-abm" style="width:60%" id="card-abm">
  <div class="container">
    <div class="row justify-content-center">

    <h1 class="add-cat col-10" id="main-title" style="text-align: left">Editar categoría</h1>

      <form  id="edit_categoryform"class="font-fira" action="<?=url("edit_category/{$category->id}")?>" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="row">
        <div class="img-fluid col-12 form-group my-2">
          <img src="<?=url("{$category->imageUrl}")?>"  height="250" alt="productImage">
        </div>

        <div class="row justify-content-center">
          <label for="file" class="form-label-prod" style="color:#000">Nueva imagen</label>

          <div class="col-md-8">
            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" >

            @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong id="error-message">{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>

      </div>
    </div>

    <br>

  <div class="row justify-content-center">
    <label for="name" class="form-label-prod" style="color:#000">Nombre de categoria</label>

    <div class="col-md-8">
      <input required name="name" type="text" value="{{$category->name}}" class="form-control">
    </div>
  </div>

  <div class="acept-cancel">
    <div class="col-md-12 justify-content-center">
      <button type="submit" id="main-add">Actualizar Categoria</button>
      <a href="<?=url("/categoriesabm")?>" id="main-cancel">Cancelar</a>
    </div>
  </div>


    </form>
  </div>
</div>
</div>


@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/edit_category.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
