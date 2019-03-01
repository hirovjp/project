<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<a href="{{ asset(URL::to('page.login')) }}">Dang nhap</a><br/>
	@foreach ($data as $row)
		<a href="{{ asset(URL::to('page/product/'.$row->id)) }}">
			<img src="{{ asset('img/'.$row->image) }}">
			<br>
			{{ $row->name }}
			<br>
		</a>
	@endforeach
</body>
</html>