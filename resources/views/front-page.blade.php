{{--
  Template Name: FrontPage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
  @include('partials.part-hero-simple')
  @include('partials.part-cta-simple')
@endsection
