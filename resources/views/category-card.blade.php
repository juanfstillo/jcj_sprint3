<div class="col-12 col-md-6 col-lg-4" id="main-card">
	<a href="{{ route('category', ['categorySlug' => $category->slug]) }}" class="card">
	<img class="card-img-top" src="{{ $category->imageUrl }}" alt="Card image cap">

	<div class="card-body">
	  <div class="row">
  		<div class="col-md-6">
  			<h5 class="card-title">{{ $category->name }}</h5>
  		</div>
  		<div class="col-md-6 ml-auto">
  			<button id="cat-button" class="button-cat" style='width:110px'>
		Ver todo
			</button>
		</div>
	  </div>
	</div>

	
  </a>
</div>
