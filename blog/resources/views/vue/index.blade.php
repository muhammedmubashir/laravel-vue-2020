@extends("layouts.app")
@section("content")
	<div id="app">
		<h2>Product Name</h2>
		<h3>  product </h3>
	</div>

<script type="text/javascript">
	var app = new Vue({
		el: "#app",
		data: {
			product: "iPhone"
		}
	});
</script>
@endsection
