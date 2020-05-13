@extends("layout.main")

@section("left_navbar")
<ul>
	<li>Home</li>
	<li>About Us</li>
	<li>Services</li>
	<li>Portfolio</li>
	<li>Contact Us</li>
</ul>
@endsection

@section("content")
	<h2>About Us</h2>
	<p>
		{{ $aboutContent }}
	</p>
	
@endsection
