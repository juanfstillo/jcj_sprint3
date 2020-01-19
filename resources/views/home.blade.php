@extends('layout')

@section('title')
  JCJ Tenis | Tienda Online
@endsection

@section('main')

<div>
	@include('carrousel')	
</div>

<h1 class="title-home">Productos</h1>

  <div class="container py-4" style="padding-top: 0px">
    <div class="row" id="category-home">
      @foreach($categories as $category)
        @include('category-card', ['category' => $category])
      @endforeach
    </div>
  </div>
@endsection
