@extends('layout')
<?php

?>
@section('title') BLOG @endsection
@section('content')
		</div>
	</div>
</div>
<div class="our-products">
	<div class="container">
	<div><a href="/blog/create">Create article</a></div>
		<div class="products-gallery">
			@forelse($articles as $article) 
			<div class="col-md-3 arr">
				<div class="bg">
				<div class="clearfix"></div>
				  <a href="/blog/{{$article->id}}"><img src="{{$article->img}}" class="img-responsive"></a>
				  <div class="caption">
					<h3>{{$article->description}}</h3>
					<p> {{$article->short_text}}...</p>
					<p> AUTHOR: {{$article->user->name}}</p>
				</div>
				</div><div class="clearfix"></div>
				
				<div><a href="/blog/{{$article->id}}/edit" >Edit article</a></div>
				<div><a href="/blog/{{$article->id}}/delete">Delete article</a></div>
			</div>
			@empty
			<p>
				No articles yet
			</p>
			@endforelse	
			<p>
			@if(!request('tag'))
				{{$articles->links('pagination')}}
			@endif
			</p>
		</div>
	</div>
</div>

@endsection