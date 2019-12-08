@extends('layout')

@section('title')
	{{ $brand->slug }}
@endsection


@section('main')

	<section id="use-cases">
		<div class="container">
		  	<div class="row">
		    	
			@foreach($brand->$products as $product)

			<div class="col-12 col-md-6 col-lg-4 text-center my-4">
		      <div class="card" style="width: 85%;">
		       <img src="images/{{ $product->img_prod }}" class="card-img-top" alt="{{ $product->img_prod }}">
		        <div class="card-body">
		         <h5 class="card-title">{{ $product->name_prod }}</h5>
		         <a href="{{ route('productdetail') }}" class="btn btn-primary">Ver detalle</a>
		        </div>
		      </div>
		    </div>

		    @endforeach 

			</div>
		</div>
	</section>
	
@endsection
