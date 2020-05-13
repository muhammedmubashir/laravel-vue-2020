<!-- Master Page -->
<!DOCTYPE html>
<html>
<head>
	<title>MyAccount App</title>
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