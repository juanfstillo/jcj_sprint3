@extends('layout')

@section('title')
  Reebok Argentina - Tienda Online - Be More Human
@endsection

@section('main')
  <div class="container py-4">
    <div class="row">
      @foreach($categories as $category)
        @include('category-card', ['category' => $category])
      @endforeach
    </div>
  </div>
@endsection