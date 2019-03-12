<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>Hình ảnh</td>
				<td>Tên sản phẩm</td>
				<td>Số lượng</td>
				<td>Đơn giá</td>
				<td colspan="2">Cập nhật</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $row)
			<tr>
				<td><img width="150px" height="auto" src="{{ asset('img/'.$row->product->image) }}"></td>
				<td>{{ $row->product->name }}</td>
				<td>{{ $row->quatily }}</td>
				<td>{{ $row->product->price * 1000 }}</td>
				<td><button>Update</button></td>
				<td><a href=""><i class="far fa-trash-alt"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/page.js') }}"></script>
</body>
</html>