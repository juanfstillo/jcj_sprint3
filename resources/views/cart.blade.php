@extends('layout')

@section('title')
JCJ Tenis | Proshop Online
@endsection

@section('main')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="white" id="main-title">Carrito</h1>
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
                    <button id="main-button" class="red" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
              <tr>
                <td colspan="3" class="form-title" id="white">Total</td>
                <td class="form-title" id="white">${{ Auth::user()->cartTotal() }}</td>
              </tr>
                <br>
          </tbody>
        </table>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <form action="{{ route('order') }}" method="post">
                {{ csrf_field() }}
                <div>
                  <label>Apellido y Nombre</label>
                  <input required type="text" id="cname" name="cname" placeholder="Tu Nombre">
                </div>

                <div>
                  <select class="" name="cbrand">
                    <option value="Mastercard">Mastercard</option>
                    <option value="Visa">Visa</option>
                    <option value="Maestro">Maestro</option>
                    <option value="American Express">American Express</option>
                  </select>
                </div>

                <div>
                  <label class="form-label">Número de tarjeta</label>
                  <input required type="number" min="16" id="cnumber" name="cnumber" placeholder="1111-2222-3333-4444">
                  <input required type="string" min="5" id="cexpirate" name="cexp" placeholder="Expiración MM/AA">
                  <input required type="number" min="3" id="cvv" name="cvv" placeholder="CVV">
                </div>

                <button class="btn btn-secondary btn-lg btn-block" type="submit">Comprar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

        @else
          <p class="about-description">No hay productos en el carrito</p>
        @endif
    </div>
  </div>
</div>
@endsection
