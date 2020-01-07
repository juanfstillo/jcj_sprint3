@extends('layout')

@section('title')
 JCJ Tenis | ABM CATEGORIAS
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 id="main-title">{{ 'Categorias' }}</h1>
        <div class="container">
          <div class="row">
            <table class='table'>
              <thead>
                <tr>
                  <td>Nombre</td>
                  <td>Slug</td>
                  <td>Imagen</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($category as $cadacategory)
                <tr>
                  <td>{{$cadacategory->name}}</td>
                  <td>{{$cadacategory->slug}}</td>
                  <td>{{$cadacategory->imageUrl}}</td>
                  <td><a href="<?= url("/delete_product/$cadacategory->id")?>"  class="delete-product px-1 text-danger"><i class="material-icons mr-3">Borrar</i></a></td>
                </tr>
              </tbody>
            @endforeach
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
