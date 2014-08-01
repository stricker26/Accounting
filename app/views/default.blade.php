<!doctype html>
<html>
<head>
	<title>BCD Pinpoint | BCD Pinpoint Direct Marketing</title>
	@include('includes.head')	
</head>	
<body>
	<!-- HEADER CONTAINER -->
	<header id="header" class="bg clearfix">
		@include('includes.header')
	</header>

	<div class="clear"></div> <!-- CLEAR DIV -->

	<!-- SLIDER CONTAINER -->
	<div class="slider">
		@include('includes.slider')
	</div>	

	<div class="clear"></div> <!-- CLEAR DIV -->

	<!-- BODY CONTAINER -->
	<div class="container">
		@yield('container')
	</div>

	<footer class="footer">
		@include('includes.footer')
	</footer>	
</body>
</html>