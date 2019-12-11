@extends('layout')

@section('title')
Mis órdenes - Reebok Argentina - Tienda Online - Be More Human
@endsection

@section('main')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Mis órdenes</h1>
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
                <td colspan="3">
                  <table class="table table-borderless table-dark products-in-order" style="background-color: #212529; color: #f8fafc">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order->productsInOrder as $productInOrder)
                        <tr>
                          <td><img src="{{ $productInOrder->product->imageUrl }}" alt="{{$productInOrder->product->name}}" /></td>
                          <td>{{ $productInOrder->product->name }}</td>
                          <td>{{ $productInOrder->count }}</td>
                          <td>${{ $productInOrder->price }}</td>
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
        <p>Aún no hiciste ninguna compra</p>
      @endif
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="/js/orders.js"></script>
@endsection
