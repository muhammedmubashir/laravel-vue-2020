
	<h1>Our Services</h1>
	<ul>
	@foreach($services as $service) 
		<li> {{ $service }}</li>
	@endforeach
	</ul>

<!-- {{ url("posts/1") }} -->