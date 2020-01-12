<div class="col-12 col-md-6 col-lg-4 mb-4" id="main-card">
  <a href="{{ route('product', [
    'categorySlug' => $product->category->slug,
    'product' => $product->slug
  ]) }}" class="card">
    <img class="card-img-top" src="{{ $product->imageUrl }}" alt="{{ $product->name }}">

    <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <h5 class="prod-title">{{ $product->name }}</h5>
      </div>

      <div class="col-md-6">
        <p class="price">${{ $product->price }}</p>
      </div>
      <div class="col-md-6 ml-auto">
        <button id="cat-button" class="button-cat" style='width:110px'>
    Detalle
      </button>
    </div>
    </div>
  </div>
  </a>
</div>