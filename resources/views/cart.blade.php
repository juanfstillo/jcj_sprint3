@extends('layout')

@section('title')
JCJ Tenis | Carrito de compras
@endsection

@section('main')

<div>
  <h1 id="main-title" class="main-title-abm" style="color:white">Carrito</h1>
</div>

<div class="card-abm" style="align-content: center">

  <div class="container" id="container-center">
    <div class="row">

      <div class="add-cat col-12" style="align-content: center">
      
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
                  <td colspan="3" class="form-total" style="border-bottom: 1px solid grey">Total</td>
                  <td colspan="3" id="pay-title" class="finalPrice">${{ Auth::user()->cartTotal() }}</td>
                </tr>
                  <br>
            </tbody>

            <tr>
              <td class="table-item"></td>
              <td class="table-item"></td>
              <td class="table-item"></td>
              <td class="table-item" style="border-top: 1px solid grey">


              {{-- P U N T O  D E  A N C L A  A  L A  H O M E --}}

                <a href="<?= url("http://127.0.0.1:8000/#category-home")?>"  class="px-1 text-primary"><button id="main-button" class="grey" style='width:200px'>
                  Seguir comprando
                  </button></a>
              </td>
              <td class="table-item" style="border-top: 1px solid grey">
                <a href="#payment" type="submit" class="px-1 text-danger" style="font-size:1.3em"><button id="main-button" style='width:200px'>
                  Finalizar compra
                  </button></a>
              </td>
            </tr>
          </table>

<div class="container" id="payment">
  <div class="row justify-content-center">
    <div class="col-10" id="form-container">
      <div class="col-12">
        <div class="card" style="background-color: #dedede">

      <div class="row col-12" style="padding-right: 0px">
        <h3 id="pay-title" class="main-title-abm col-6" style="margin-top:15px">Forma de pago</h3>

        <div class="cardIcons col-6" style="margin-top:20px">
          <img src="/images/visa.svg" class="cardImg">
          <img src="/images/amex.svg" class="cardImg">
          <img src="/images/master.svg" class="cardImg">
          <img src="/images/maestro.svg" class="cardImg">
        </div>
      </div>


        <div class="card-body">
        <form method="POST" id="form-registro" action="{{ route('order') }} ">
          {{ csrf_field() }}
          
          <div class="form-group row">
            <label for="fullName" class="col-md-4 col-form-label text-md-right" style="font-size:0.5em">Nombre del titular de la tarjeta</label>
          
            <input required type="text" id="fullName" name="fullName" class="form-control col-md-4" style="font-size:0.5em">
          </div>

          <div class="form-group row">
            <label for="cbrand" class="col-md-4 col-form-label text-md-right" style="font-size:0.5em">Tipo</label>
          
            <select class="form-control col-md-4" name="cbrand" style="font-size:0.5em">
              <option value="Mastercard">Mastercard</option>
              <option value="Visa">Visa</option>
              <option value="Maestro">Maestro</option>
              <option value="American Express">American Express</option>
            </select>
          </div>

          <div class="form-group row">
            <label for="cnumber" class="col-md-4 col-form-label text-md-right" style="font-size:0.5em">Número de tarjeta</label>

            <input required type="number" min="16" id="cnumber" name="cnumber" placeholder="1111-2222-3333-4444" class="form-control col-md-4" name="cbrand" style="font-size:0.5em">


            <label class="col-md-4 col-form-label text-md-right" style="font-size:0.5em"></label>
            <input type="hidden" class="form-control col-md-4"></div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right" style="font-size:0.5em">Expiración</label>

            <input required type="string" min="5" id="cexpirate" name="cexp" placeholder="MM/AA" class="form-control col-md-2" name="cbrand" style="font-size:0.5em">
          </div>

          <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right" style="font-size:0.5em">Cód. de seguridad</label>

            <input required type="password" min="3" id="cvv" name="cvv" placeholder="CVV" class="form-control col-md-2" name="cbrand" style="font-size:0.5em">
          </div>

          <a href="#" id="buy">
            <button id="main-button" class="main-button" style='font-size: 0.4em'>
                  Comprar
            </button>
          </a>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    @else
    <div class="card-abm" style="align-content: center">
      <div class="col-12 justify-content-center" id="card-abm">
        <img src="images/icon-tennis.svg" class="icon-empty" style="text-align: -webkit-center">
      </div>
      <div>
        <p class="about-description col-12">No hay productos en el carrito</p>
    </div>
    @endif
  </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/cart.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection