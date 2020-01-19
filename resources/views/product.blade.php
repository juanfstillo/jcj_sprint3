@extends('layout')

@section('title')
  {{$product->name}} - JCJ Tenis - Tienda Online
@endsection

@section('main')
  <div class="container py-4">
    <div class="row">
      <div class="col-12 px-0">
        <h3>
          <a href=" {{ route('category', ['categorySlug' => $product->category->slug]) }}" style="text-decoration: none" class="product-category-name"> <   Volver a {{ $product->category->name }} </a>
        </h3>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-5 pr-0 bg-white">
        <img class="img-fluid p-5" src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
      </div>
      <div class="col-12 col-lg-7 bg-white">
        <h3 class="card-title-prod" style="font-size: 2.3em">{{ $product->name }}</h3>
        <p id="price-prod" style="padding-left:0px">${{ $product->price }}</p>
        <p id="description-title" style="margin-bottom:50px">{{ $product->description }}</p>
        @guest
          <a href="{{ route('login') }}" id="cat-button">Agregar al carrito</a>
        @else
          <form action="{{ route('addProductToCart', ['productId' => $product->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <label for="count" id="cantidad" class="form-group" style="display:inline">Cantidad</label>
            </div>
            <div class="col-md-4" style="margin-bottom:30px">
              <select id="dropdown-item" name="count" class="form-control" style="display:inline">
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>  
            </div>
            
            <button type="submit" id="main-button" style="font-size:1em">Agregar al carrito</button>
          </form>
        @endguest
        
      </div>
    </div>
  </div>
@endsection
