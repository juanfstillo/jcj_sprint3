@extends('layout')
@section('title') Agregar Categorias
@endsection

@section('main')

  <div class=" my-2 container border rounded">
    <div class="row font-fira text-center text-white mt-4 mx-1 py-2  rounded">
        <div class="col-12">
          <h1>Agregar Categorias a la Base de Datos</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-3">
        <form  class="font-fira" action="<?=url("/add_category")?>" method="POST" enctype="multipart/form-data">
          @csrf
        </div>
      </div>


      <div class=" col-12 text-white">
      <div class="form-group">
          <label for="file" class="">Imagen de la Categoria</label>

          <div class="col-md-6">
              <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file">

              @error('file')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
    </div>

        {{-- <div class=" col-12 text-white">
          <label for="imageUrl" class= "">
          </label>
          <input  name="imageUrl" type="file" value="" style="">
        </div> --}}


      <div class="row">
          <div class="form-group my-2 col-12 col-lg-6 text-white">
            <label for="name" class="ml-1"><p>Nombre de la Categoria </p></label>
            <input required name="name" type="text" value= "" class="form-control"  placeholder="">
          </div>

          <div class="form-group my-2 col-12 col-lg-6 text-white">
            <label for="slug" class="ml-1"><b class="">Slug de Categoria </b></label>
            <input name="slug" type="text" value= "" class="form-control"  placeholder="">
          </div>
      </div>



      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn px-4">Agregar Categoria</button>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
        <a href="<?=url("/categoriesabm")?>" class="btn px-4">Cancelar</a>
        </div>
      </div>


    </div>


      </form>
    </div>

@endsection

@section('scripts')

@endsection
