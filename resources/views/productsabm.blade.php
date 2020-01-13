@extends('layout')

@section('title')
 JCJ Tenis | ABM CATEGORIAS
@endsection

@section('main')
<h1 id="main-title">{{ 'Productos' }}</h1>
  <div class="container">
    <div class="row">
      <div class="col-12">
          <a href="<?= url("/add_product")?>"  class="px-3 text-danger"><i class="">Agregar Producto</i></a>
      </div>
    </div>
  </div>
        <div class="container">
          <div class="row">
            <div class="col-12">

            <table class='table'>
              <thead>
                <tr>
                  <td>Nombre</td>
                  {{-- <td>Slug</td> --}}
                  <td>Imagen</td>
                  {{-- <td>Descripción</td> --}}
                  <td>Precio</td>
                  <td>Categoría</td>

                </tr>
              </thead>
              <tbody>
                @foreach ($product as $eachproduct)
                <tr>
                  <td>{{$eachproduct->name}}</td>
                  {{-- <td>{{$eachproduct->slug}}</td> --}}
                  <td><img src="{{$eachproduct->imageUrl}}" alt="{{$eachproduct->name}}"></td>
                  {{-- <td>{{$eachproduct->description}}</td> --}}
                  <td>${{$eachproduct->price}}</td>
                  <td>{{$eachproduct->category->name}}</td>

                  <td><a href="<?= url("/edit_product/{$eachproduct->id}")?>"  class=" px-1 text-primary"><i class="">Editar</i></a></td>
                  <td><a href="<?= url("/delete_product/$eachproduct->id")?>"  class=" px-1 text-danger"><i class="">Borrar</i></a></td>
                </tr>
              </tbody>
            @endforeach
            </table>
            </div>
          </div>
        </div>
      </div>
@endsection
