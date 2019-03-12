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
			@if (App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() !== 0 )
				{{ App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() }}
			@endif
		</i></a>
		<br>
		<input type="text" id="value" name="text" placeholder="Tìm kiếm">
		<input type="submit" id="timkiem" name="">
	</div>
	<div class="container content">
		<span id="id">{{ $data->id }}</span>
		<br>
		{{ $data->name }}
		<br>
		{{ $data->description }}
		<br>
		<img src="{{ asset('img/'.$data->image) }}">
		<br>
		{{ $data->price }}
		<br>
		{{ $data->quality }}
		<button id="buttonAddCart">Add Cart</button>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/page.js') }}"></script>
</body>
</html>