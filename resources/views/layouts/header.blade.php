<div id="top-bar" class="container header">
	<div class="row">
		<div class="span4">
			<input type="text" class="input-block-level search-query" id="value" name="text" placeholder="Tìm kiếm">
		</div>
		<div class="span8">
			<div class="account pull-right">
				<ul class="user-menu">				
					<li>
						@if (!Auth::check())
							<a href="{{ asset(URL::to('page/login')) }}">Đăng nhập</a>
						@else
							{{ Auth::user()->name }} | <a href="{{ route('logout') }}">Đăng xuất</a>
						@endif
					</li>
					<li>
						<a href="{{ route('showCart') }}">
							<i class="fas fa-shopping-cart cart fa-2x">
								@if (Auth::check())
									@if (App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() !== 0)
										{{ App\ProductCart::where('cart_id', '=', Auth::user()->cart->id)->count() }}
									@endif
								@endif
							</i>
						</a>
					</li>	
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="wrapper" class="container">
			<section class="navbar main-menu">
<div class="navbar-inner main-menu">				
	<a href="index.html" class="logo pull-left"><img src="{{ asset('themes/images/logo.png') }}" class="site_logo" alt=""></a>
	<nav id="menu" class="pull-right">
		<ul>
			@foreach ($menu as $row)
				<li><a href="">{{ $row->name }}</a></li>
			@endforeach
		</ul>
	</nav>
</div>
</section>
</div>