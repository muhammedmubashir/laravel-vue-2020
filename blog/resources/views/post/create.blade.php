@extends("layout.main")
@section("content")
<h2>Create New Post</h2>
@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li> {{ $error }}</li>
		@endforeach
	</ul>
@endif
<form action="{{ route('posts.store') }}" method="post">
	{{ csrf_field() }}
	<div>
		<label>Title</label>
		<input type="text" name="title">
	</div>
	<br>
	<br>
	<div>
		<label>Description</label>
		<textarea name="description" cols="50" rows="10"></textarea>
	</div>
	<br>
	<div>
		<input type="submit" name="sbtBtn" Value="Save">
	</div>
	
</form>
@endsection