@extends('skeleton')

@section('title', '| Home')

@section('content')
  @include('elements/_page-header')
  <main class="page-content">
    <swiped-masthead></swiped-masthead>
    <greetings></greetings>
    <features-recipes></features-recipes>
    <specials-selection></specials-selection>
    <sub-introduction></sub-introduction>
    <latest-recipes></latest-recipes>
    <testimonials></testimonials>
    <latest-posts></latest-posts>
    <gallery-recipes></gallery-recipes>
    <contact-info></contact-info>
  </main>

@endsection
