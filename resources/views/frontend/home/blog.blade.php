<br><br>
<h2 class="main-text">Article</h2>

<div class="container">
	<div class="col-md-12">
		@foreach($getblogs as $getblog)
		<div class="col-md-4 col-sm-6">
			<h4>{{$getblog->title}}</h4>
			<p>{{strip_tags(str_limit($getblog->description, $limit=220,$end='...'))}}</p>
			<div class="blog-img">
				<img src="{{url('/imageupload/'. $getblog->image) }}" alt="" class="img-responsive center-block">
			</div>
			<br>
			<center><a href="article-detail&<?php echo $getblog->id ?>/<?php echo $getblog->title ?>" class="custom-btn">&nbsp;&nbsp;&nbsp;READ&nbsp;&nbsp;&nbsp;</a></center>
		</div>
		@endforeach
		
		
	</div>
	<div class="clearfix"></div>
</div>
<br><br><br>

<center><a href="{{url('article')}}" class="custom-btn-1">VIEW ALL</a></center>