@extends('frontend.layouts.home-master')
@foreach($getservices as $seo)
@section('title',$seo->title)
@section('description',$seo->description)
@section('keywords',$seo->seokeyword)
@endforeach
@section('content')

<div class="container">

	<center><h1>Our Services</h1></center><hr>

	<div class="col-md-12">
		@foreach($getservices as $getservice)
		<div class="container">
		<div class="container-fluid service-page">
			<a href="service-detail&<?php echo $getservice->id ?>/<?php echo $getservice->title ?>">
			<div class="col-md-10 col-md-offset-1">
				<img src="{{url('/imageupload/'. $getservice->image) }}" alt="" class="img-responsive">
			</div>
			<div class="col-md-10 col-md-offset-1">
				<center><h2>{{$getservice->title}}</h2></center>
				<p>{{strip_tags(str_limit($getservice->description, $limit=350,$end='...'))}}</p>
			</div>
			</a>
		
			</div>
		</div>
		<div class="clearfix"></div>
		@endforeach
	</div>
</div>
<br><br>

@stop