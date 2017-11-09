@extends('skeleton')

@section('title', '| Home')

@section('content')
  @include('elements/_page-header')
  <main class="page-content">
    @include('elements/_masthead-swiper')
    @include('elements/_greetings-statements')
    @include('elements/_features-foods')
  </main>

@endsection
