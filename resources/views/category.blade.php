@extends('layout')

@section('title')
  {{$category->name}} JCJ Tenis | Tienda Online
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 id="main-title">{{ $category->name }}</h1>
        <div class="container">
          <div class="row">
            @foreach ($category->products as $product)
              @include('product-card', ['product' => $product])
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
