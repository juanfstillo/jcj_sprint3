@extends('layout')

@section('title')
JCJ Tenis | Carrito de compras
@endsection

@section('main')

<h1 id="main-title" class="main-title-abm" style="color:white">Carrito</h1>

<div class="card-abm" style="width:90%">

  <div class="container">
    <div class="row">

      <div class="add-cat col-12">
      
        @if (Auth::user()->productsInCart->isNotEmpty())
          <table class="table table-borderless products-in-cart">
            <thead class="row-grey col-12">
              <tr>
                <th class="table-title"></th>
                <th class="table-title">Producto</th>
                <th class="table-title">Cantidad</th>
                <th class="table-title">Precio</th>
                <th class="table-title">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach(Auth::user()->productsInCart as $productInCart)
              <tr>
                <td class="table-item">
                  <img src="{{ $productInCart->product->imageUrl }}" alt="{{ $productInCart->product->name }}" />
                  <td class="table-item">{{ $productInCart->product->name }}</td>
                </th>
                <td class="table-item">{{ $productInCart->count }}</td>
                <td class="table-item">${{ $productInCart->product->price }}</td>
                <td class="table-item">
                  <form action="{{ route('removeProductFromCart', ['productId' => $productInCart->product->id]) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="product_id" value="{{ $productInCart->product->id }}">
                    <button type="submit" id="main-button" class="red" style='width:110px'>Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach
                <tr>
                  <td colspan="3" class="form-title" id="white" style="border-bottom: 1px solid grey">Total</td>
                  <td class="form-title" id="white" style="border-bottom: 1px solid grey">${{ Auth::user()->cartTotal() }}</td>
                </tr>
                  <br>
            </tbody>

            <hr>

            <tr>
              <td class="table-item"></td>
              <td class="table-item"></td>
              <td class="table-item"></td>
              <td class="table-item" style="margin:0px">

              
              {{-- P U N T O  D E  A N C L A  A  L A  H O M E --}}

                <a href="<?= url("http://127.0.0.1:8000/#category-home")?>"  class="px-1 text-primary"><button id="main-button" class="grey" style='width:200px'>
                  Seguir comprando
                  </button></a>
              </td>
              <td class="table-item" style="border-top: 1px solid grey">
                <a href="<?= url("/finalizar-compra")?>"  class="px-1 text-danger" style="font-size:1.3em"><button id="main-button" style='width:200px'>
                  Finalizar compra
                  </button></a>
              </td>
            </tr>
          </table>

          @else
            <p class="about-description">No hay productos en el carrito</p>
          @endif
      </div>
    </div>
  </div>
</div>
@endsection
