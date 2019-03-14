@extends('layouts.default')

@section('title', 'Đăng nhập')

@section('content')
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

<div id="wrapper" class="container">
	<section class="main-content">				
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Đăng </strong>nhập</span></h4>
				<form method="post" action="{{ route('load') }}">
					@csrf
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input type="email" name="email" placeholder="Nhập email" id="username" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
								<input type="password" name="password" placeholder="Nhập mật khẩu" id="password" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-inverse large" type="submit" value="Đăng nhập">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>
			<div class="span7">					
				<h4 class="title"><span class="text"><strong>Đăng </strong>kí</span></h4>
				<form name="register" method="post" action="{{ route('register') }}" class="form-stacked">
					@csrf
					<fieldset>
						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input type="text" placeholder="Nhập email" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nhập mật khẩu</label>
							<div class="controls">
								<input type="password" name="password" placeholder="Nhập mật khẩu" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Nhập lại mật khẩu</label>
							<div class="controls">
								<input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu" class="input-xlarge">
							</div>
						</div>
						<hr>
						<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Đăng kí"></div>
					</fieldset>
				</form>					
			</div>				
		</div>
	</section>
</div>
@endsection