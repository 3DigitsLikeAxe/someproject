@extends('layout')

@section('title') Create article @endsection

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css" integrity="sha512-byErQdWdTqREz6DLAA9pCnLbdoGGhXfU6gm1c8bkf7F51JVmUBlayGe2A31VpXWQP+eiJ3ilTAZHCR3vmMyybA==" crossorigin="anonymous" />

@endsection


@section('content')
<h1>Edit post {{$article->description}}</h1>
<form method="POST" action="/blog/{{$article->id}}" enctype="multipart/form-data">
@method('PUT')<!--PUT PATCH DELETE-->
@csrf        <!--cross site request fordure with post creating-->

	<div class="file is-normal is-boxed has-name">
	  <label class="file-label">
		<input class="file-input" type="file" name="img" value="{{$article->img}}">
		<p>now downloaded <img src="{{$article->img}}" class="img-responsive" width="150" height="150"></p>
		<span class="file-cta">
		  <span class="file-label">
			File…
		  </span>
		</span>
	  </label>
	</div>
	<div class="field">
	  <label class="label">Description</label>
	  <div class="control">
		<input class="input" type="text" name="description" value="{{$article->description}}">
	  </div>
	</div>
	<div class="field">
	  <label class="label">Text</label>
	  <div class="control">
		<textarea class="textarea" name="text" >{{$article->text}}</textarea>
	  </div>
	</div>
  <div class="control">
	<button class="button is-link">Submit</button>
  </div>
</form>
@endsection