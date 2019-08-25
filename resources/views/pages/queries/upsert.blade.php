@extends('layouts.app')

@section('content')
{{-- url()->current() or Request::url() can be used to get the current URL --}}
<h1>Enquiry Form</h1>
<form action="{{action('QueriesController@store')}}" method="POST">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your name" value="{{$query->name}}" />
		<small id="nameHelp" class="form-text text-muted">Enter your name so we can properly address you.</small>
	</div>

	<div class="form-group">
		<label for="message">Message</label>
		<textarea class="form-control" id="message" name="message" placeholder="Enter your message">{!! $query->message !!}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>

	@isset($query->id)
		@method('PUT')
	@endisset

	@isset($errors)
		{{$errors}}
	@endisset

	@csrf
</form>
@endsection