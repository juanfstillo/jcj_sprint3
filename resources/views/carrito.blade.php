@extends('layout')

@section('title')
	Carrito de compras
@endsection


@section('main')

	<section id="carrito">
	<div class="container-fluid">
      <div id="spacer">
      <h1 class="allCategories" id="categories">Carrito de compras</h1>
        <div class="container bg-white pb-3 mt-5 opct opacity-0.7">
    	<table id="cart" class="table table-hover table-condensed">

        <thead>
        	<tr>
		       <th style="width:50%">Producto</th>
							 <th style="width:10%">Precio</th>
               <th style="width:8%">Unidades</th>
               <th style="width:22%" class="text-center">Subtotal</th>
               <th style="width:10%"></th>
    		</tr>
    	</thead>

    	<tbody>
    		<tr>
            	<td data-th="Producto">
    			<div class="row">
    			<div class="col-sm-2 hidden-xs"><img src="/products/{{ $products->img_prod }}" alt="{{ $products->name_prod }}" class="img-fluid "/>
    			</div>
    			
    			<div class="col-sm-10">

    			<h4 class="nomargin">{{ $products->name_prod }}</h4>
    			<p>{{ $products->detail }}</p>
                </div>	
    			</div>
    	</div>
    			</td>

                <td data-th="Precio">{{ $products->price }}</td>
    			<td data-th="Unidades">
    			<input type="numero" class="form-control text-center" value="1">
    			</td>
    			
    			<td data-th="Subtotal" class="text-center">{{ $carrito->price_shop}}</td>
                
                <td class="actions" data-th="">
				<button class="btn btn-info btn-sm"><i class="fas fa-sync-alt" style="color:white"></i></button>
				<button class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color:white"></i></button>
				</td>

                </tr>
    	</tbody>

    			<tfoot>
    			<tr>
    			<td colspan="3" class="hidden-xs"></td>
    			<td class="hidden-xs text-center"><strong>Total $13.999</strong></td>
                <td colspan="1" class="hidden-xs"></td>
    			</tr>
    			</tfoot>
        </table>

        <div class="content text-right">
        <td class="d-inline-block"><a href="index.html" class="btn btn-outline-dark" style="width:">Continuar comprando</a></td>
        <td class="d-inline-block"><a href="#" class="btn btn-success">Finalizar compra</a></td>
        </div>
        </div>
        </div>
	</section>
	
@endsection



@forelse($user->productCarrito as $product)

<div class="col-12 col-md-6 col-lg-4 text-center my-4">
  <div class="card" style="width: 85%;">
   <img src="images/{{ $product->img_prod }}" class="card-img-top" alt="{{ $product->img_prod }}">
    <div class="card-body">
     <h5 class="card-title">{{ $product->name_prod }}</h5>
     <a href="{{ route('productdetail') }}" class="btn btn-primary">Ver detalle</a>
    </div>
  </div>
</div>

@endforelse 
