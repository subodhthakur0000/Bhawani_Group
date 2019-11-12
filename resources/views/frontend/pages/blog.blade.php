@extends('layouts.home-master')

@section('content')
<div class="container-fluid">

	<div class="container story-subtitle">
		<center><h3>Recent Blogs</h3></center>
		<div class="story-line center-block"><span ></span></div>
	</div>

	<div class="container">
		@foreach($getblogs as $getblog)
		<a href="blog-detail&<?php echo $getblog->id ?>">
		<div class="col-md-6 col-sm-6 blog-page">
			<div class="col-md-8 col-md-offset-2">
				<div class="blog-image">
					<img class="img-responsive center-block" src="{{ asset('storage/app/public/' . $getblog->image) }}" alt="description of image">
				</div>
			</div>
			<div class="clearfix"></div>
				<center><h2>{{$getblog->title}}</h2></center>
				<p>{{strip_tags(str_limit($getblog->description, $limit=220,$end='...'))}}
				</p>
				
			</div>
			</a>
		@endforeach

	</div>
</div>
<br><br>
@endsection