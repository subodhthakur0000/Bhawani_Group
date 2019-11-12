@extends('frontend.layouts.home-master')
@section('title',$seo->title)
@section('description',$seo->description)
@section('keywords',$seo->keywords)
@section('content')

<div class="container">

	<center><h1>Articles</h1></center>

	<div class="col-md-12 article">
		<?php $isOdd = false?>
@foreach($getarticles as $getarticle)
<?php if($isOdd){
$isOdd = false;
}
else{
	$isOdd = true;
}

?>
@if($isOdd)
		<div class="second">
		<div class="container-fluid">
			<a href="article-detail&<?php echo $getarticle->id ?>/<?php echo $getarticle->title ?>">
				<div class="col-md-4">
					<img src="{{ url('/imageupload/'.$getarticle->image) }}" alt="" class="img-responsive">
				</div>
				<div class="col-md-8">
					<h2>{{$getarticle->title}}</h2>
					<p>{{strip_tags(str_limit($getarticle->description, $limit=200,$end='...'))}}</p></div>
					
				</div>
			</a>
		</div>
		@else
		
		<div class="first">
			<div class="container-fluid">
			<a href="article-detail&<?php echo $getarticle->id ?>">
				<div class="col-md-8">
					<h2>{{$getarticle->title}}</h2>
					<p>{{strip_tags(str_limit($getarticle->desctiption, $limit=200,$end='...'))}}</p></div>
				<div class="col-md-4">
					<img src="{{url('/imageupload/'. $getarticle->image) }}" alt="" class="img-responsive">
				</div>
			</a>
			</div>
		</div>
		@endif
		<div class="clearfix"></div>
		@endforeach
	</div>
</div>
<br><br>

@stop