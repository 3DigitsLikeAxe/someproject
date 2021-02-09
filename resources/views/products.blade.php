@extends('layout')

@section('title') PRODUCTS @endsection
@section('content')
		</div>
	</div>
</div>
<!--pages-->
<div class="container">
	<div class="bg">
	@foreach($productList as $pl)
	  <img style="float:left" src="{{$pl->pic}}" class="img-responsive">
	  <div class="caption">
		<h3>{{$pl->description}}</h3>
		<p> {{$pl->text}}</p>
	  </div><div class="clearfix"></div>
	@endforeach
	</div>
	{{$productList->links('pagination')}}
</div><!--container-->
<!--pages-->
@endsection