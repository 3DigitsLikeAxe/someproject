@extends('layout')

@section('title') CONTACT @endsection
@section('content')
		</div>
	</div>
</div>
<!--contact-->
			<div class="contact-page">
				<h3>CONTACT</h3>
				<div class="container">
					<div class="map">
						  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192698.30298383342!2d29.01217945!3d41.0053215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2sIstanbul%2C+%C4%B0stanbul%2C+Turkey!5e0!3m2!1sen!2sin!4v1435063089706" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="feed-back">
						<div class="col-md-6 tt">
						<div class="text-area">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your text here...</textarea>
						</div>
						</div>
						<div class="col-md-6 tt brk9">
						<div class="form">
							<form>
								<input class="name" type="text" name="name" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"><br>
								<br>
								<input class="nuber" type="text" name="Phone number" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Number';}"><br>
								<br>
								<input class="mail" type="text" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}"><br>
								<br>
								<button type="clear" class="btn btn-danger">Clear</button>
								<button type="submit" class="btn btn-danger">Submit</button>
							</form>
						</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--contact-->
		
@endsection