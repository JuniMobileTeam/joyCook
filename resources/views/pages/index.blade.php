@extends('skeleton')

@section('title', '| Home')

@section('content')
  @include('elements/_page-header')
  <main class="page-content">
    <swiped-masthead></swiped-masthead>
    <greetings></greetings>
    <features-recipes></features-recipes>
    @include('elements/_special-selections')
    @include('elements/_sub-introduction')
    @include('elements/_latest-recipes')
    @include('elements/_testimonials')
    @include('elements/_latest-posts')
  </main>

@endsection
