@extends('layout')

@section('title')
	{{-- {{ $category->slug }} --}}
@endsection


@section('main')

	<section id="use-cases">
		<div class="container">
		  	<div class="row">
		    	
			@foreach($category->$brands as $brand)

			<div class="col-12 col-md-6 col-lg-4 text-center my-4">
		      <div class="card" style="width: 85%;">
		       <img src="img/__categories/{{ $brands->img_brand }}" class="card-img-top" alt="Pelotas">
		        <div class="card-body">
		         <h5 class="card-title">{{ $brands->name_brand }}</h5>
		         <a href="{{ route('productdetail',['brand'=>$brands->slug]) }}" class="btn btn-primary">Ver todos</a>
		        </div>
		      </div>
		    </div>

		    @endforeach 

			</div>
		</div>
	</section>
	
@endsection
