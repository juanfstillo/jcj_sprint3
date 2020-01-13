@extends('layout')
@section('title') Agregar Productos
@endsection

@section('main')

  <div class=" my-2 container border rounded">
    <div class="row font-fira text-center text-white mt-4 mx-1 py-2  rounded">
        <div class="col-12">
          <h1>Agregar Productos</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-3">
        <form  class="font-fira" action="<?=url("/add_product")?>" method="POST" enctype="multipart/form-data">
          @csrf
        </div>
      </div>


      <div class=" col-12 text-white">
      <div class="form-group">
          <label for="file" class="">Nueva Imagen del Producto</label>

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
          <div class="form-group my-2 col-6 col-lg-6 text-white">
            <label for="name" class="ml-1"><p>Nombre del Producto </p></label>
            <input required name="name" type="text" value= "" class="form-control"  placeholder="">
          </div>

          {{-- <div class="form-group my-2 col-6 col-lg-6 text-white">
            <label for="slug" class="ml-1"><b class="">Slug del Producto </b></label>
            <input name="slug" type="text" value= "" class="form-control"  placeholder="">
          </div> --}}

          <div class="form-group my-2 col-6 col-lg-6 text-white">
            <label for="description" class="ml-1"><b class="">Descripción del Producto </b></label>
            <input name="description" type="text" value= "" class="form-control"  placeholder="">
          </div>

          <div class="form-group my-2 col-6 col-lg-6 text-white">
            <label for="price" class="ml-1"><b class="">Precio del Producto </b></label>
            <input name="price" type="text" value= "" class="form-control"  placeholder="">
          </div>

          {{-- <div class="form-group my-2 col-6 col-lg-6 text-white">
            <label for="category_id" class="ml-1"><b class="">Categoría del Producto </b></label>
            <input name="category_id" type="text" value= "" class="form-control"  placeholder="">
          </div> --}}
          {{-- <div class="col-sm" id="colcarga">
                <select name="fk_style" id="style" value="">
                    <option value=>{{$categorynewProduct->name}}</option>
                </select>
              </div>
           --}}
           <div class="form-group my-2 col-12 col-lg-6">
             <label for="category_id" class="ml-1 text-white"><b>Categoria</b></label>

                     <select name="category_id"  value="">
                       <option value="1">RAQUETAS</option>
                       <option value="2">PELOTAS</option>
                       <option value="3">CUERDAS</option>
                       <option value="4">BOLSOS</option>
                       <option value="5">ACCESORIOS</option>

                   </select>
             </div>


      </div>



      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn px-4">Agregar Producto</button>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
        <a href="<?=url("/productsabm")?>" class="btn px-4">Cancelar</a>
        </div>
      </div>


    </div>


      </form>
    </div>

@endsection

@section('scripts')

@endsection
