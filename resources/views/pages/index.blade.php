@extends('skeleton')

@section('title', '| Home')

@section('content')
  @include('elements/_page-header')
  <main class="page-content">
    @include('elements/_masthead-swiper')
    @include('elements/_greetings-statements')
    @include('elements/_features-foods')
    @include('elements/_special-selections')
    @include('elements/_sub-introduction')
    @include('elements/_latest-recipes')
    @include('elements/_testimonials')
    @include('elements/_latest-posts')
  </main>

@endsection
