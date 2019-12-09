@extends('layout')

@section('title')
	Bienvenidx a JCJ Tenis
@endsection


@section('main')

<div id="principalbody">

<h1 class="allCategories">Categorias</h1>

<section id="use-cases">
<div class="container">
  	<div class="row">

	@foreach($categorias as $categoria)

	<div class="col-12 col-md-6 col-lg-4 text-center my-4">
      <div class="card" style="width: 85%;">
       <img src="img/__categories/{{ $categoria->img_cat }}" class="card-img-top" alt="ivan">
        <div class="card-body">
         <h5 class="card-title">{{ $categoria->name_cat }}</h5>
         <p class="card-text">{{ $categoria->description }}</p>
         <a href={{ $categoria->slug }} class="btn btn-primary">Ver Más</a>
        </div>
      </div>
    </div>

    @endforeach


	</div>
</div>
</section>

</div>

{{-- @foreach($categorias as $categoria)
    <li>
      {{  }}
    </li>
@endforeach --}}

@endsection
