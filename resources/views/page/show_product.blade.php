<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
</head>
<body>
	{{ $data->id }}
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
</body>
</html>