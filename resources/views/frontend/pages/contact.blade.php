@extends('frontend.layouts.home-master')

@section('content')
	<div class="container-fluid">
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.6943280110063!2d85.3360264144334!3d27.6649274339631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19e14a90733f%3A0xf984b74a494f43bd!2sBhawani+Groups!5e0!3m2!1sen!2snp!4v1530759835484" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
@if(Session::has('success'))
<div class="container">
<div class="alert alert-success" role="alert">
	<strong>Success:</strong> {{Session::get('success')}}
</div>
</div>
@endif
	<div class="container">
		<div class="contact col-md-12">
			<div class="col-md-5">
			<h2>Send Us A Note</h2>
			<form action="{{ url('storecontact') }}" class="contact-form" method="post">
	            {!! csrf_field() !!}
	           <!--  <input type="hidden" name="to" value="maharjanribek4.3@gmail.com"> -->
				<input class="form-control" type="text" name="name" placeholder="Full Name">
				<input class="form-control" type="email" name="email" placeholder="E-mail Address">
				<input class="form-control" type="number" name="phone" placeholder="Phone">
				<textarea class="form-control" name="message" placeholder="Message"></textarea>
				<br>
				<button type="submit" class="custom-btn">&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;</button>
			</form>
			</div>


			<div class="col-md-3 col-md-offset-1">
				<h2>Contact:</h2>
				    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;<b>Tinkune, Kathmandu</b></p>
				    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<b>(+977) 01-4111937</b></p>
				    <p><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;<b>info@bhawanisolution.com</b></p>
				</ul>
			</div>
			<div class="col-md-3">
				<h2>Social Media</h2>
				<a href="https://www.facebook.com/bhawanigroupsolution/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
				<!--<a href="" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>-->
				<!--<a href="" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>-->
				<!--<a href="" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>-->
			</div>
		</div>

	</div>

	<div class="container">
		<div class="contact col-md-12">
			
		</div>
	</div>
@stop