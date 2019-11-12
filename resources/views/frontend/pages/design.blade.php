@extends('frontend.layouts.home-master')
@section('title',$seo->title)
@section('description',$seo->description)
@section('keywords',$seo->keywords)
@section('content')

<div class="container-fluid" style="padding: 0;">
	<div class="cover-image">
		 @foreach($getabouts as $getabout)
        <img src="{{url('/imageupload/'.$getabout->image)}}" alt="{{$getabout->altimage}}" class="img-responsive">
        @endforeach
		
	</div>

	<div class="container">
		<center><h1>Why Choose Our Designs</h1></center>
		<p>We aim for perfection while keeping things simple, and this makes our work stand up and do the job. We maintain the required standard with our designs. Our designs is a perfect blend of simplicity, creativity, uniqueness and the modern trend.</p>
		<br><br>
		<center><h1>Some Of Our Designs</h1></center>
		<div class="col-md-12" style="margin-bottom: 30px;">
			@foreach($getdesigns as $getdesign)
			<div class="col-md-3 design-image">
				<a href="{{url('/imageupload/'. $getdesign->image) }}" class="flipLightBox"><img src="{{url('/imageupload/'. $getdesign->image) }}" alt="{{$getdesign->alt}}" class="img-responsive"></a>
			</div>
			@endforeach
		</div>
	</div>
	<div class="container" style="margin-bottom: 50px;">
		<center><a href="{{url('contact')}}" class="custom-btn-1">CONTACT US</a></center>
	</div>

</div>

<!-- <script type="text/javascript">$('body').flipLightBox()</script> -->

@stop