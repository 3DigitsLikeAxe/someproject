@extends('layout')

@section('title') Create article @endsection

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css" integrity="sha512-byErQdWdTqREz6DLAA9pCnLbdoGGhXfU6gm1c8bkf7F51JVmUBlayGe2A31VpXWQP+eiJ3ilTAZHCR3vmMyybA==" crossorigin="anonymous" />
@endsection


@section('content')
</div>
<div class="our-products">
	<div class="container">
		<div class="bg">
			<form method="POST" action="/blog" enctype="multipart/form-data">
			@csrf        <!--cross site request fordure with post creating-->
				<div class="file is-normal is-boxed has-name">
				  <label class="file-label">
					<input class="file-input @error('img') is-danger @enderror" type="file" name="img" value="{{old('img')}}">
					<span class="file-cta">
					  <span class="file-label">
						File…
					  </span>
					</span>
				  </label>
				</div>
				@error('img')
					<p class="help is-danger"> {{$errors->first('img')}}</p>
				@enderror
				<label for="description">Description</label>
				<div class="control">
					<input class="input @error('description') is-danger @enderror" type="text" name="description" placeholder="Text input" value="{{old('description')}}">
				</div>
				@error('description')
					<p class="help is-danger"> {{$errors->first('description')}}</p>
				@enderror
				<label for="text">Text</label>
				<div class="control">
					<input class="input @error('text') is-danger @enderror" type="text" name="text" placeholder="Text input" value="{{old('text')}}">
				</div>
				@error('text')
					<p class="help is-danger"> {{$errors->first('text')}}</p>
				@enderror
				<div class="select is-multiple control">
					<select name="tags[]" multiple >
					@foreach($tags as $tag)
						<option value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
					</select>
				</div>	
				@error('tags')
					<p class="help is-danger"> {{$errors->first('tags')}}</p>
				@enderror				
				<div class="control">
					<button class="button is-link" type="submit" >Submit</button>
				</div>
			 </form>
		</div>
	</div>
</div>
@endsection