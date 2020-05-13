@extends("layout.main")
@section("content")
<h2>Posts list</h2>
	<a href="{{ route('posts.create') }}">
		Add New Post
	</a>
	<ul>
	@foreach($postList as $post)
		<li> {{ $post->title }}</li>
	@endforeach
	</ul>
@endsection