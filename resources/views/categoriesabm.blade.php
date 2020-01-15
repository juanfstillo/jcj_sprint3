@extends('layout')

@section('title')
 JCJ Tenis | ABM CATEGORIAS
@endsection

@section('main')
  
<h1 id="main-title" class="main-title-abm" style="color: white">{{ 'Categorias' }}</h1>
 <div class="card-abm" style="width:90%">

  <div class="container">
    <div class="row">

      <div class="add-cat col-12">
        <img src="images/hand.png" style="width: 120px" class="img-add">
        <h3 class="table-add">¿Necesitas agregar una nueva categoría?</h3>
        <a href="<?= url("/add_category")?>">
          <button id="main-add" style='width:160px'>
        Agregar categoría
          </button>
        </a>
      </div>

      <div class="col-12" id="table-abm">
            <table class="table">
              <thead class="row-grey col-12">
                <tr>
                  <td class="table-title">Nombre</td>
                  {{-- <td>Slug</td> --}}
                  <td class="table-title">Imagen</td>
                  <td class="table-title"></td>
                  <td class="table-title"></td>
                </tr>
              </thead>
              
              <tbody>
                @foreach ($category as $cadacategory)
                <tr>
                  <td class="table-item">{{$cadacategory->name}}</td>
                  {{-- <td>{{$cadacategory->slug}}</td> --}}
                  <td class="table-item"><img src="{{$cadacategory->imageUrl}}" alt="{{$cadacategory->name}}" style="width:200px"></td>
                  <td class="table-item"><a href="<?= url("/edit_category/{$cadacategory->id}")?>"  class=" px-1 text-primary"><button id="main-button" class="grey" style='width:110px'>
                  Editar
                  </button></a></td>
                  <td><a href="<?= url("/delete_category/$cadacategory->id")?>"  class=" px-1 text-danger"><button id="main-button" class="red" style='width:110px'>
                  Eliminar
                  </button></a></td>
                </tr>
              </tbody>
            @endforeach
            </table>

          </div>
        </div>
      </div>
    </div>
  

@endsection
