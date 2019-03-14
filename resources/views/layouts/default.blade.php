<!DOCTYPE html>
<html>
<head>
	<title>App Name - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!-- icon awesome  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}"rel="stylesheet">      
	<link href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	
	<link href="{{ asset('themes/css/bootstrappage.css') }}" rel="stylesheet"/>
	
	<!-- global styles -->
	<link href="{{ asset('themes/css/flexslider.css') }}" rel="stylesheet"/>
	<link href="{{ asset('themes/css/main.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!-- scripts -->
	<script src="{{ asset('themes/js/jquery-1.7.2.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>				
	<script src="{{ asset('themes/js/superfish.js') }}"></script>	
	<script src="{{ asset('themes/js/jquery.scrolltotop.js') }}"></script>
</head>
<body>
	{{-- Header --}}
	@include('layouts/header')
	
	{{-- Content --}}
	@yield('content')

	{{-- Footer --}}
	@include('layouts/footer')

	<script src="{{ asset('themes/js/common.js') }}"></script>
	<script src="{{ asset('themes/js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/page.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			$(document).ready(function() {
				$('.flexslider').flexslider({
					animation: "fade",
					slideshowSpeed: 4000,
					animationSpeed: 600,
					controlNav: false,
					directionNav: true,
					controlsContainer: ".flex-container" // the container that holds the flexslider
				});
			});
		});
	</script>
</body>
</html>