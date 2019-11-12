@extends('frontend.layouts.home-master')
@foreach($seo as $seo)
@section('title',$seo->seotitle)
@section('description',$seo->seodescription)
@section('keywords',$seo->keywords)
@endforeach
@section('content')
<div class="container-fluid">

	<div class="container story-subtitle">
		<center><h3>WHAT OUR CLIENTS HAVE TO SAY ABOUT US</h3></center>
		<div class="story-line center-block"><span ></span></div>
	</div>

	<div class="container">
		@foreach($gettestimonials as $gettestimonial)
		<div class="col-md-6 testimonial-edit">

			<div class="testimonial" aria-label="testimonal">
				<div class="col-md-12">
					<img class="img-responsive center-block" src="{{url('/imageupload/' . $gettestimonial->image) }}" alt="{{$gettestimonial->altimage}}">
				</div>
				<div class="testimonial-text"><blockquote aria-label="testimonial comment">{{strip_tags($gettestimonial->description)}}
					<cite aria-label="author of testimonial">- {{$gettestimonial->name}}</cite>
				</blockquote>
				</div>
		</div>

		</div>
		@endforeach

	</div>
</div>
<br><br>
@endsection