@extends('layout')

@section('title')
   JCJ Tenis - Tienda Online -Tu pedido
@endsection

@section('main')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 id="main-title" class="white">Mis órdenes</h1>
      @if (Auth::user()->orders->isNotEmpty())
        <table class="table table-borderless products-in-cart">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Auth::user()->orders as $order)
              <tr class="order-row" data-id="{{ $order->id }}">
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at }}</td>
                <td>${{ $order->total }}</td>
              </tr>
              <tr class="order-{{ $order->id }}-detail d-none">
                <td colspan="6">

                  <table class="table table-borderless table-dark products-in-order">
                    <thead>
                      <tr>
                        <th scope="col" class="items" style="    color: black;"></th>
                        <th scope="col" style="    color: black;" class="items">Producto</th>
                        <th scope="col" style="    color: black;"class="items">Cantidad</th>
                        <th scope="col" style="    color: black;"class="items">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order->productsInOrder as $productInOrder)
                        <tr>
                          <td style="    color: black;"><img src="{{ $productInOrder->product->imageUrl }}" alt="{{$productInOrder->product->name}}" /></td>
                          <td style="    color: black;">{{ $productInOrder->product->name }}</td>
                          <td style="    color: black;">{{ $productInOrder->count }}</td>
                          <td style="    color: black;">${{ $productInOrder->price }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
        <p class="about-description">Aún no hiciste ninguna compra</p>
      @endif
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="/js/orders.js"></script>
@endsection
