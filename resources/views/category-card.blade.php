<div class="col-12 col-md-6 col-lg-4 mb-5">
  <a href="{{ route('category', ['categorySlug' => $category->slug]) }}" class="card">
    <img class="card-img-top p-3" src="{{ $category->imageUrl }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title h3"><strong>{{ $category->name }}</strong></h5>
    </div>
  </a>
</div>
