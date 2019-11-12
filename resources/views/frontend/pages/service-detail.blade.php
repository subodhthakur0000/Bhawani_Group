@extends('frontend.layouts.home-master')

@section('content')

<div class="container">
@foreach($servicedetails as $servicedetail)
	<h1 style="text-align: center;">{{$servicedetail->title}}</h1><br>

	<div class="col-md-12">
		<div class="container detail-page">

			<div class="col-md-8 col-md-offset-2">
				<img src="{{url('/imageupload/'. $servicedetail->image) }}" alt="" class="img-responsive" style="width: 100%;">
			</div>
			<div class="col-md-12">
				<br>
				<p><?php  echo htmlspecialchars_decode(stripslashes($servicedetail->description)) ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	@endforeach
</div>
<br><br>

@stop