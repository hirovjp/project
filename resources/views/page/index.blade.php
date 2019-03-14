<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<div class="container header">
		@if (!Auth::check())
			<a href="{{ asset(URL::to('page/login')) }}">Đăng nhập</a>
		@else
			{{ Auth::user()->name }} | <a href="{{ route('logout') }}">Đăng xuất</a>
		@endif
		<a href=""><i class="fas fa-shopping-cart cart">
			@if (Auth::check())
				@if (App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() !== 0)
					{{ App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() }}
				@endif
			@endif
		</i></a>
		<br>
		<input type="text" id="value" name="text" placeholder="Tìm kiếm">
		<input type="submit" id="timkiem" name="">
	</div>
	<div class="container content">
		@foreach ($data as $row)
			<a href="{{ asset(URL::to('page/product/'.$row->id)) }}">
				<img src="{{ asset('img/'.$row->image) }}">
				<br>
				{{ $row->name }}
				<br>
			</a>
		@endforeach
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/page.js') }}"></script>
</body>
</html>