@extends('frontend.layouts.home-master')
@foreach($getarticledetails as $getarticledetail)
@section('title',$getarticledetail->seotitle)
@section('description',$getarticledetail->seodescription)
@section('keywords',$getarticledetail->keywords)
@endforeach
@section('content')

<div class="container">
	@foreach($getarticledetails as $getarticledetail)

	<center><h1>{{$getarticledetail->title}}</h1></center><br>

	<div class="col-md-12">
		<div class="container detail-page">

			<div class="col-md-8 col-md-offset-2">
				<img src="{{url('/imageupload/'. $getarticledetail->image) }}" alt="" class="img-responsive" style="width: 100%;">
				<br><br>
			</div>
			<div class="col-md-12">
				<p><?php  echo htmlspecialchars_decode(stripslashes($getarticledetail->description)) ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	@endforeach
</div>
<br><br>

@stop