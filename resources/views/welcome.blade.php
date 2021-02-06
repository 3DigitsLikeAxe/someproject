@extends('layout')

@section('title') WELLCOME @endsection
@section('content')
			<div class="banner-slider">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				
				  <!-- Indicators -->
				  @foreach($banners as $key => $banner)
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="{{$key}}" ></li>
				  </ol>
				  @endforeach
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  @foreach($banners as $key => $banner)
					<div class="item <?=($loop->first) ? 'active' : '' ?>">
					  <a href="/products"><img src="{{$banner->img}}"  class="img-responsive"></a>
					  <div class="carousel-caption ch">
						<p>{{$banner->description}}</p>
					  </div>
					</div>
					@endforeach
				  </div>
				  
				  <!-- Controls -->
				  <a class="carousel-control left" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control right" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--header-ends-->
<!--content-->
<div class="our-products">
	<div class="container">
		<div class="products-gallery">
			<h2>OUR-PRODUCTS</h2>
			@foreach($products as $product) 
			<div class="col-md-3 arr">
				<div class="bg">
				  <img src="{{$product->pic}}" alt="pet" class="img-responsive">
				  <span class="glyphicon glyphicon-heart pst" aria-hidden="true"></span>
				  <div class="caption">
					<h3>{{$product->name}}</h3>
					<p>{{$product->description}} </p>
					<p><a href="/products" class="btn btn-danger" role="button">More</a></p>
				</div>
				</div>
			</div>
			@endforeach
			
			<div class="clearfix"></div>
		</div>
			<div class="traits-technology">
				<div class="col-md-8 tt">
					<ul class="traits-text">
						<li><h3>Traits, Technology</h3></li>
						<li><p><b style="font-weight:600;">Lorem Ipsum is simply dummy text of the printing</b></p></li>
						<li><p>There are many variations of passages of Lorem Ipsum available,<br>
						but the majority have suffered alteration in some form, by injected humour,<br>
						or randomised words which don't look even slightly believable.</p></li>
					</ul>
					<ol>
						<div class="col-md-6 brk">
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						</div>
						<div class="col-md-6 brk">
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						<li><a href="#">Lorem Ipsum is simply dummy text.</a></li>
						</div>
						<div class="clearfix"></div>
					</ol>
					<span><a href="#" class="btn btn-danger bt" role="button">More</a></span>
				</div>
				<div class="col-md-4 tt">
					<div class="traits-logos">
						<div class="col-xs-6 col-md-6 tt brk2">
							<span class="glyphicon glyphicon-leaf bgtl" aria-hidden="true"></span>
						</div>
						<div class="col-xs-6 col-md-6 tt brk2">
							<span class="glyphicon glyphicon-grain bgtl" aria-hidden="true"></span>
						</div>
						<div class="col-xs-6 col-md-6 tt brk2">
							<span class="glyphicon glyphicon-fire bgtl" aria-hidden="true"></span>
						</div>	
						<div class="col-xs-6 col-md-6 tt brk2">
							<span class="glyphicon glyphicon-camera bgtl" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
<!--content-ends-->
<!--brand-logos-->
<div class="brand-logo">
	<div class="container">
		<div class="col-xs-6 col-md-3 brk3">
			<a href=""><img src="/images/bd1.png" alt="" class="img-responsive"/></a>
		</div>
		<div class="col-xs-6 col-md-3 brk3">
			<a href=""><img src="/images/bd2.png" alt="" class="img-responsive"/></a>
		</div>
		<div class="col-xs-6 col-md-3 brk3">
			<a href=""><img src="/images/bd3.png" alt="" class="img-responsive"/></a>
		</div>
		<div class="col-xs-6 col-md-3 brk3">
			<a href=""><img src="/images/bd4.png" alt="" class="img-responsive"/></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--brand-ends-->


@endsection

