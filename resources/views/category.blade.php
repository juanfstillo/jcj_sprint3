@extends('layout')

@section('title')
  {{$category->name}} JCJ Tenis | Proshop Online
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="display-4">{{ $category->name }}</h1>
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
