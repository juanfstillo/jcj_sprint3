@extends('layout')

@section('title')
  {{$product->name}} - Reebok Argentina - Tienda Online - Be More Human
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="product-category-name">
          <a href="{{ route('category', ['categorySlug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
        </h2>
        <h1>{{ $product->name }}</h1>
      </div>
    </div>
  </div>
@endsection