@extends('layout')
@section('title') GALARY @endsection
@section('content')
		</div>
	</div>
</div>
<!--pages-->
<div class="container">
	<div class="col-md-8 lt">
		<ul>
		@foreach($gallery as $gal)
		  <li  style="display:inline-block; vertical-align: middle;"><img src="{{$gal->img}}" class="img-responsive" width="239" height="239"></li>
		@endforeach
		</ul>
	</div>
	{{$gallery->links('pagination')}}
</div><!--container-->
<!--pages-->

@endsection