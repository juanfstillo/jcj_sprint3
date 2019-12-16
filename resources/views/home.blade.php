@extends('layout')

@section('title')
  JCJ Tenis | Proshop Online
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
