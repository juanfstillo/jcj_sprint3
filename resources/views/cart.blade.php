@extends('layout')

@section('title')
JCJ Tenis | Proshop Online
@endsection

@section('main')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Carrito</h1>
      @if (Auth::user()->productsInCart->isNotEmpty())
        <table class="table table-borderless products-in-cart">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Auth::user()->productsInCart as $productInCart)
              <tr>
                <td>
                  <img src="{{ $productInCart->product->imageUrl }}" alt="{{ $productInCart->product->name }}" />
                  <td>{{ $productInCart->product->name }}</td>
                </th>
                <td>{{ $productInCart->count }}</td>
                <td>${{ $productInCart->product->price }}</td>
                <td>
                  <form action="{{ route('removeProductFromCart', ['productId' => $productInCart->product->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="product_id" value="{{ $productInCart->product->id }}">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
              <tr>
                <td colspan="3" class="text-right h2">Total</td>
                <td class="h2">${{ Auth::user()->cartTotal() }}</td>
                <td>
                  <form action="{{ route('order') }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-dark btn-lg" type="submit">Comprar</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        @else
          <p>No hay productos en el carrito</p>
        @endif
    </div>
  </div>
</div>
@endsection
