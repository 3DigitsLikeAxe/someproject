@extends('layout')

@section('title') ABOUT @endsection
@section('content')
		</div>
	</div>
</div>
		<!--about-->
			<div class="about-pg">
			<h3>about us</h3>
			<div class="container">
					<div class="col-md-6 lt">
						<div class="choose-us">
							<h3>why choose us?</h3>
							<ul>
								<li class="text-ul">
									<span class="one"></span>
									<div class="folt">
									<h4>Lorem Ipsum is simply dummy text</h4>
									<p>Lorem Ipsum has been the industry's standard dummy </p>
									</div>
									<div class="clearfix"></div>
								</li>
								<li class="text-ul">
									<span class="two"></span>
									<div class="folt">
									<h4>Lorem Ipsum is simply dummy text</h4>
									<p>Lorem Ipsum has been the industry's standard dummy </p>
									</div>
									<div class="clearfix"></div>
								</li>
								<li class="text-ul">
									<span class="three"></span>
									<div class="folt">
									<h4>Lorem Ipsum is simply dummy text</h4>
									<p>Lorem Ipsum has been the industry's standard dummy </p>
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>
						<div class="clear"></div>
						</div>
					</div>
					<div class="col-md-6 lt">
						<div class="few-words">
							<h3>A few words about us.</h3>
								<div class="few-text">
									<img src="./images/gift.jpg" alt="" title="" class="img-responsive" />
									<div class="flt">
									<h4>Lorem Ipsum is simply dummy text</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							<p><a href="#" class="btn btn-danger" role="button">More</a> </p>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="test-our">
			<div class="container">
				<div class="col-md-4 lt">
					<div class="testmonials">
						<h3>testimonials</h3>
							<div class="box">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						<div class="links">
						<p>john doe</p>
						<a href="#">http://demolink.org</a>
						</div>
							<div class="box">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						<div class="links">
						<p>john doe</p>
						<a href="#">http://demolink.org</a>
						</div>
					</div>
				</div>
				<div class="col-md-8 lt">
					<div class="our-team">
						<h3>our team</h3>
						@foreach($teams as $team)
						<div class="col-md-3 txt">
							<img src="{{$team->pic}}" alt="{{$team->name}}" title="{{$team->name}}" class="img-responsive" >
								<h4>{{$team->name}}</h4>
							<p>{{$team->description}}</p>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>    
		</div>
		<!--about-->
		
@endsection