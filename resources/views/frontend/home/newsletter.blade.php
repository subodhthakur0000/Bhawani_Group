<div class="container">
	@if(Session::has('success'))
<div class="container">
<div class="alert alert-success" role="alert">
	<strong>Success:</strong> {{Session::get('success')}}
</div>
</div>
@endif
	<div class="col-md-12">
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.6943280110063!2d85.3360264144334!3d27.6649274339631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19e14a90733f%3A0xf984b74a494f43bd!2sBhawani+Groups!5e0!3m2!1sen!2snp!4v1530791827588" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-6">
			<p>Bhawani Solutions is a ‘A’ class construction company registered with the Office of the Company Registrar as per the rules of Private Limited Company Act 2021.The main purpose of the company is to carry out different constructions works related to water resource, sanitary and irrigation, roads, </p>
			<form action="{{ url('storeinquiry') }}" class="contact-form" method="post">
	            {!! csrf_field() !!}
			<div class="col-md-8 col-md-offset-2"><input name="email" type="email" class="form-control email" placeholder="Email Address"></div>
			<div class="col-md-8 col-md-offset-2"><button type="submit" class="form-control submit">Submit</button></div>
			</form>
		</div>
	</div>
</div>