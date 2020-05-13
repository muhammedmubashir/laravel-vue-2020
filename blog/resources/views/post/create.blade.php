@extends("layout.main")
@section("content")
<h2>Create New Post</h2>
<form action="{{ route('posts.store') }}" method="post">
	<div>
		<label>Title</label>
		<input type="text" name="title">
	</div>
	<div>
		<label>Description</label>
		<input type="text" name="description">
	</div>
	<div>
		<input type="submit" name="sbtBtn" Value="Save">
	</div>
	
</form>
@endsection