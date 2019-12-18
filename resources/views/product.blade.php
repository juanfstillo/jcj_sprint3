@extends('layout')

@section('title')
  {{$product->name}} - JCJ Tenis - Tienda Online 
@endsection

@section('main')
  <div class="container py-4">
    <div class="row">
      <div class="col-12 px-0">
        <h3 class="product-category-name">
          <a href="{{ route('category', ['categorySlug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
        </h3>
        <h2>{{ $product->name }}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-5 pr-0 bg-white">
        <img class="img-fluid p-5"src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
      </div>
      <div class="col-12 col-lg-7 bg-white">
        <p class="display-3 mt-5">${{ $product->price }}</p>
        @guest
          <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Agregar al carrito</a>
        @else
          <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <label for="count">Cantidad</label>
            <select id="count" name="count">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <br />
            <button type="submit" class="btn btn-dark btn-lg">Agregar al carrito</button>
          </form>
        @endguest
      </div>
    </div>
  </div>
@endsection
