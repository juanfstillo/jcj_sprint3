@extends('layout')

@section('title')
	{{ $category->name_cat }}
@endsection


@section('main')
	<div id="principalbody">

	<h1 class="allCategories">{{ $category->name_prod }}</h1>

	<section id="use-cases">
	<div class="container">
	  	<div class="row">

		@foreach($raquets as $raquet)

		<div class="col-12 col-md-6 col-lg-4 text-center my-4">
	      <div class="card" style="width: 85%;">
	       <img src="img/__products/{{ $raquet->img_prod }}" class="card-img-top" alt="ivan">
	        <div class="card-body">
	         <h5 class="card-title">{{ $raquet->name_prod }}</h5>
	         <p class="card-text">${{ $raquet->price }}</p>
	         <a href={{ $raquet->slug }} class="btn btn-primary">Ver Más</a>
	        </div>
	      </div>
	    </div>

	    @endforeach


		</div>
	</div>
	</section>

	</div>

@endsection
