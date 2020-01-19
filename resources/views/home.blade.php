@extends('layout')

@section('title')
  JCJ Tenis | Tienda Online
@endsection

@section('main')

<div>
	@include('carrousel')	
</div>

<h1 class="title-home" id="category-home">Productos</h1>

  <div class="container py-4" style="padding-top: 0px">
    <div class="row">
      @foreach($categories as $category)
        @include('category-card', ['category' => $category])
      @endforeach
    </div>
  </div>
@endsection
