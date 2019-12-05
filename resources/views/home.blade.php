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
      <div class="card" style="width: 100%;">
       <img src="https://shop.wilson.com/media/catalog/product/cache/38/image/9df78eab33525d08d6e5fb8d27136e95/6/e/6ea7afe8e9099303d308dada67272c29394b7812_wrt1019w_1.jpg" class="card-img-top" alt="Pelotas">
        <div class="card-body">
         <h5 class="card-title">{{ $categoria->name_cat }}</h5>
         <p class="card-text">La mejor variedad de pelotas y precios.</p>
         <a href="pelotas.php" class="btn btn-primary">Ver Más</a>
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

  
  
