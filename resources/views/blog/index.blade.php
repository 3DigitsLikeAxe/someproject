@extends('layout')

@section('title') {{$article->description}} @endsection

@section('content')
<a href="{{ URL::previous() }}">Go Back</a>
		</div>
	</div>
</div>
<div class="our-products">
	<div class="container">
		<div class="bg">
			
				
			  <img src="{{$article->img}}" class="img-responsive">
			  <div class="caption">
				<h3>{{$article->description}}</h3>
				<p> {{$article->text}}</p>
			
			</div><div class="clearfix"></div>
			<p>
				@foreach($article->tags as $tag)
					<a href="\blog?tag={{$tag->name}}">{{$tag->name}}</a>
				@endforeach
			</p>
		</div>
	</div>
</div>

@endsection