@extends('layouts.home-master')

@section('content')

<div class="container">
@foreach($blogdetails as $blogdetail)
	<center><h1>{{$blogdetail->title}}</h1></center><br>

	<div class="col-md-12">
		<div class="container detail-page">

			<div class="col-md-8 col-md-offset-2">
				<img src="{{ asset('storage/app/public/' . $blogdetail->image) }}" alt="" class="img-responsive" style="width: 100%;">
				<br><br>
			</div>
			<div class="col-md-12">
				<p><?php  echo htmlspecialchars_decode(stripslashes($blogdetail->description)) ?></p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	@endforeach
</div>
<br><br>

@stop