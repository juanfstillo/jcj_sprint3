@extends('layout')
@section('title') Editar {{$product->name}}
@endsection

@section('main')

<div class="card-abm" style="width:60%" id="card-abm">
  <div class="container">
    <div class="row justify-content-center">
        
    <h1 class="add-cat col-12" id="main-title" style="margin-left: 20px">Editar producto</h1>

    <form class="form-body col-8" action="<?=url("edit_product/{$product->id}")?>" method="POST" enctype="multipart/form-data">

    @csrf
      
    <div class="row justify-content-left col-6">
      <label for="img" class="">Imagen actual</label>
    </div>
    <div class="row justify-content-left col-6">
      <img src="<?=url("{$product->imageUrl}")?>" class="imgProd" alt="productImage">
    </div>

    <br>

    <div class="row justify-content-left col-8">
      <label for="file" class="form-label-prod">Cambiar imagen</label>
    </div>
    <div>
      <input  type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <br>

    <div class="row justify-content-left col-6">
      <label for="name" class="form-label-prod">Nombre del Producto</label>
    </div>
    <div>
      <input required name="name" type="text" value= "{{$product->name}}" class="form-control" placeholder="">
    </div>

    <br>

    <div class="row justify-content-left col-6">
      <label for="price" class="form-label-prod">Precio</label>
    </div>
    <div>
      <input name="price" type="text" value= "{{$product->price}}" class="form-control col-4">
    </div>

    <br>

    <div class="row justify-content-left col-6">
      <label for="description" class="form-label-prod">Descripción</label>
    </div>
    <div>
      <textarea name="description" type="text" value= "{{$product->description}}" class="form-control justify-content-left" style="width: 100%" placeholder="{{$product->description}}" rows="6"></textarea> 
    </div>

    <br>

    {{-- <div class="row justify-content-left col-6">
      <label for="category_id" class="form-label-prod">Categoria</label>
    </div>
    <div>
      <input name="category_id" type="text" value= "{{$category->category_name}}" class="form-control" placeholder="{{$category->category_name}}">
    </div> --}}

  <div class="row justify-content-left col-6">
    <label for="category_id" class="form-label-prod">Categoria actual</label>
    <h3 class="table-add">{{$product->category->name}}</h3>
  </div>

  <br>

  <div class="row justify-content-left col-6">
    <label for="category_id" class="form-label-prod">Nueva Categoria</label>
    <select name="category_id" class="form-control col-md-8" value="{{$product->category_id}}">     
      <option value="1">RAQUETAS</option>
      <option value="2">PELOTAS</option>
      <option value="3">CUERDAS</option>
      <option value="4">BOLSOS</option>
      <option value="5">ACCESORIOS</option>
    </select>
  </div>

  <br>

  <div class="acept-cancel">
    <div class="row justify-content-center col-12">
      <a href="<?=url("/productsabm")?>" id="main-cancel">Cancelar</a>
      <button type="submit" id="main-add">Guardar cambios</button>
    </div>
  </div>

      </form>
    </div>
  </div>
</div>


@endsection

@section('scripts')

@endsection
