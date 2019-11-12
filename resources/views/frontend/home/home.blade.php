@extends('frontend.layouts.home-master')

@extends('frontend.modals.inquiry')
@section('title',$seo->title)
@section('description',$seo->description)
@section('keywords',$seo->keywords)
@section('content')

@include('frontend.header.carousel')

<div class="container-fluid finder">
	<center><h2>find your dream architecture for your house</h2></center>
	<center><p><i>&quot;&nbsp;You invest in your house once&nbsp;&quot;</i></p></center>
</div>

<img src="{{url('public/images/arrow.png')}}" alt="" class="arrow">

@include('frontend.home.service')

<div class="gallery">
	<h2>OUR WORK</h2>
	@include('frontend.home.gallery')
</div>

<div class="clearfix"></div>


<div class="wordcarousel">
	@include('frontend.home.wordcarousel')
</div>

<div class="blog">
	@include('frontend.home.blog')
</div>

<div class="inquiry">
	@include('frontend.home.inquiry')
</div>

@stop