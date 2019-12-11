@extends('layout')

@section('title')
  {{$product->name}} - Reebok Argentina - Tienda Online - Be More Human
@endsection

@section('main')
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <h2 class="product-category-name">
          <a href="{{ route('category', ['categorySlug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
        </h2>
        <h1>{{ $product->name }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
      </div>
      <div class="col-12 col-lg-6">
        <p class="display-2 font-weight-bold">${{ $product->price }}</p>
        @guest
          <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Agregar al carrito</button>
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