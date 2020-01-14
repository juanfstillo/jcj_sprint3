@extends('layout')
@section('title') Editar {{$category->name}}
@endsection

@section('main')

  <div class=" my-2 container border rounded">
    <div class="row font-fira text-center text-white mt-4 mx-1 py-2  rounded">
        <div class="col-12">
          <h1>Editar Categorias de la Base de Datos</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-3">
        <form  class="font-fira" action="<?=url("edit_category/{$category->id}")?>" method="POST" enctype="multipart/form-data">
          @csrf
        </div>
      </div>

      <div class="row">
        <div class="img-fluid col-12 form-group my-2">

              <img src="<?=url("{$category->imageUrl}")?>"  height="250" alt="productImage">


        </div>

          <div class="img-fluid col-12 form-group my-2">

            <label for="file" class="">Imagen de la Categoria</label>

            <div class="col-m">
                <input  type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" >

                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
      </div>





      <div class="row">
          <div class="form-group my-2 col-12 col-lg-6">
            <label for="name" class="ml-1 text-white"><b>Nombre de la Categoria</b></label>
            <input required name="name" type="text" value= "{{$category->name}}" class="form-control" placeholder="">
          </div>
      </div>



      <div class="row bg-light py-3 text-center" >
        <div class="col-12">
          <button type="submit" class="btn px-4">Actualizar Categoria</button>
        </div>
          <div class="col-12 my-2">
          <a href="<?=url("/categoriesabm")?>" class="">Cancelar</a>
        </div>
      </div>

    </form>
  </div>


@endsection

@section('scripts')

@endsection
