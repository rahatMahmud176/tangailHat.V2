@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('mainContent')
  <!-- hero section start -->
    @include('frontEnd.pages.home.hero-area')
  <!-- hero section end -->

  <!-- Catagory section start -->
  @include('frontEnd.pages.home.category')
  <!-- Catagory section end -->

  <!-- Product section start -->
  @include('frontEnd.pages.home.ads')
  <!-- Product section end -->

  <!-- Features start -->
  @include('frontEnd.pages.home.features')

  <!-- Features end -->

  <!-- Roadmap start -->
  @include('frontEnd.pages.home.roadmap') 
  <!-- Roadmap end -->

  <!-- Team start -->
  @include('frontEnd.pages.home.team')  
  <!-- Team end -->

  <!-- Blog start -->
  @include('frontEnd.pages.home.blog')  
  
  <!-- Blog end -->

  <!-- Faqs start -->
  @include('frontEnd.pages.home.faqs')   
  <!-- Faqs end -->
@endsection