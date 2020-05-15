@extends("layout.main")
@section("content")
<h2>
	<p>{{ $post->title }}</p>
</h2>
<p>{{ $post->details }}</p>

<!--Comments-->
@if(count($comments) > 0)
<h3>Comments</h3>

<ul>
	@foreach($comments as $c)
		<li>
			{{ $c->comments }}
		</li>
	@endforeach
</ul>

@endif

@endsection