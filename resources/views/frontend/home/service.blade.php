
<!--  OUR SERVICES  -->
<div class="container service">
	<div class="col-md-12">
		<div class="col-md-4 col-sm-4 image">
			<img src="{{url('public/images/services.jpg')}}" alt="" class="img-responsive">
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>OUR SERVICES</h3>
			@foreach($getservices as $getservice)
			<div class="col-md-6 col-sm-6">
				<center><i class="fa fa-link" aria-hidden="true"></i></center>
				<h4>{{$getservice->title}}</h4>
				<div class="service-content">
					<p>{{strip_tags(str_limit($getservice->description, $limit=220,$end='...'))}}
					</p>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</div>
<!-- button -->
<div>
	<center><a href="{{url('service')}}" class="custom-btn">VIEW ALL</a></center>
</div>
<!-- End of OUR SERVICES -->