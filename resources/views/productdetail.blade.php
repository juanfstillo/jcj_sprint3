@extends('layout')

@section('title')
	Estas viendo {{ $products->count() }} productos
@endsection

@section('main')

<h3> < Volver </h3>
<h3> Breadcrumb > Categoria > Marca > Producto </h3>



@foreach($productdetail->products as $product) 

	<div class="row">
        <div class="col-sm-4 hidden-xs">
          <img src="/products/{{ $products->img_prod }}" alt="{{ $products->name_prod }}" class="img-fluid "/>
        </div>

        <div class="col-sm-8 bg-white p-0">

          <p class="mt-3 mb-1 pl-3">#{{ $products->id }}</p>
          <h3 class="nomargin text-uppercase bg-dark text-white pl-3">{{ $brands->name_brand }}</h3>
          <h5 class="pl-3">{{ $products->name_prod }}</h5>
          <div class="pb-3">
            <h6 class="font-weight-light pl-3">{{ $products->detail }}</h6>
          </div>

          <hr class="m-0 mb-1">

          <span class="precio">
            <h2 class="pl-3">{{ $products->price }}</h2>
          </span>
          <button type="button" class="btn btn-outline-success waves-effect ml-3"><a href="/carrito" class="text-success waves-effect">Agregar a carrito</a></button>

        </div>
       </div>
     </div>

@endforeach

@endsection




{{ $product->img_prod }}
	{{ $product->name_prod }}