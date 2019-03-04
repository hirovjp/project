<form action="{{ URL::to('page/admin/updateProduct/'.$data->id) }}" method="post">
	@csrf
	<table>
		<tr>
			<td>ID</td>
			<td>
				{{ $data->id }}
			</td>
		</tr>
		<tr>
			<td>Tên sách</td>
			<td>
				<input type="test" value="{{ $data->name }}" name="name">
			</td>
		</tr>
		<tr>
			<td>Miêu tả:</td>
			<td>
				<textarea name="description">{{ $data->description }}</textarea>
			</td>
		</tr>
		<tr>
			<td>Giá:</td>
			<td>
				<input type="text" value="{{ $data->price }}" name="price">
			</td>
		</tr>
		<tr>
			<td>Hình ảnh:</td>
			<td>
				@if ($data->image)
				<img src="{{ asset('img/'. $data->image) }}">
				@else
					{{ 'Hình ảnh chưa được đẩy lên' }}
				@endif
				<br>
				<input type="file" name="">
			</td>
		</tr>
		<tr>
			<td>Số lượng:</td>
			<td>
				<input type="number" value="{{ $data->quantily }}" name="quantily">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="">
			</td>
		</tr>
	</table>
</form>