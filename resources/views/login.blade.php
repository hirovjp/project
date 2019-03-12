
	<form method="post" action="{{ route('load') }}">
		<caption>Đăng nhập</caption>
		@csrf
		Nhập Email:
		<input type="email" name="email">
		Nhập password:
		<input type="password" name="password">
		<input type="submit" name="">
	</form>
	<br>
	<form name="register" method="post" action="{{ route('register') }}">
		@csrf
		<caption>Tạo tài khoản</caption>
		Nhập email:
		<input type="email" name="email" placeholder="nhập email">
		Nhập password:
		<input type="password" name="password" placeholder="nhập password">
		Nhập lại password:
		<input type="password" name="password_confirmation">
		<input type="submit" name="submit" value="Register">
	</form>
	<div id="thongBao"></div>

	@if (count($errors->all()))
		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach
	@endif

	@if (Session::has('error'))
		{{ Session::get('error') }}
	@endif

	@if (Session::has('success'))
		{{ Session::get('success') }}
	@endif