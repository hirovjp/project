
	<form method="post" action="{{ URL::to('load') }}">
		<caption>Đăng nhập</caption>
		@csrf
		Nhập Email:
		<input type="email" name="email">
		Nhập password:
		<input type="password" name="password">
		<input type="submit" name="">
	</form>
	<br>
	<form name="register" onsubmit="return(checkSubmit())" method="post" action="{{ URL::to('register') }}">
		@csrf
		<caption>Tạo tài khoản</caption>
		Nhập email:
		<input type="email" name="email" placeholder="nhập email">
		Nhập password:
		<input type="password" name="password_1" placeholder="nhập password">
		Nhập lại password:
		<input type="password" name="password_2">
		<input type="submit" name="submit" value="Register">
	</form>
	<div id="thongBao"></div>

	<script type="text/javascript">
		function checkSubmit () {
			var pass_1 = parseInt(document.forms['register']['password_1'].value);
			var pass_2 = parseInt(document.forms['register']['password_2'].value);
			if (pass_1 !== pass_2) {
				document.getElementById("thongBao").innerHTML = "Mật khẩu nhập lại chưa khớp";
				return false;
			} else {
				return true;
			}
		}
	</script>