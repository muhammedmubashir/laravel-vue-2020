<!-- Master Page -->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
	<title>My App</title>
</head>
<body>

	<header>
		@include("layout.header")
	</header>
	<nav>
		@yield("left_navbar")
	</nav>
	<section>
		<div>
			@yield("content")
		</div>
	</section>
	<footer>
		@yield("footer")
	</footer>
</body>
</html>