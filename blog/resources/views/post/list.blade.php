@extends("layout.main")
@section("content")
@if(session("status") != "")
	<div class="alert alert-success">
		{{ session("status") }}
	</div>
@endif
<h2>Posts list</h2>
	<a href="{{ route('posts.create') }}">
		Add New Post
	</a>
	<ul>
	@foreach($postList as $post)
		<li> <a href="{{ route('posts.show',$post->post_id) }}"> {{ $post->title }} </a></li>
	@endforeach
	</ul>
@endsection