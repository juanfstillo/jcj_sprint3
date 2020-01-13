@extends('layout')

@section('title')
 JCJ Tenis | ABM CATEGORIAS
@endsection

@section('main')
  <h1 id="main-title">{{ 'Categorias' }}</h1>
 <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="<?= url("/add_category")?>"  class="px-3 text-danger"><i class="">Agregar Categoria</i></a>
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
                </tr>
              </thead>
              <tbody>
                @foreach ($category as $cadacategory)
                <tr>
                  <td>{{$cadacategory->name}}</td>
                  {{-- <td>{{$cadacategory->slug}}</td> --}}
                  <td><img src="{{$cadacategory->imageUrl}}" alt="{{$cadacategory->name}}"></td>
                  <td><a href="<?= url("/edit_category/{$cadacategory->id}")?>"  class=" px-1 text-primary"><i class="">Editar</i></a></td>
                  <td><a href="<?= url("/delete_category/$cadacategory->id")?>"  class=" px-1 text-danger"><i class="">Borrar</i></a></td>
                </tr>
              </tbody>
            @endforeach
            </table>

          </div>
        </div>
      </div>
  

@endsection
