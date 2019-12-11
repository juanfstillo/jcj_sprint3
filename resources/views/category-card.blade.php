<div class="col-12 col-md-6 col-lg-4">
  <a href="{{ route('category', ['categorySlug' => $category->slug]) }}" class="card">
    <img class="card-img-top" src="{{ $category->imageUrl }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $category->name }}</h5>
    </div>
  </a>
</div>