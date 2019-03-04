<form action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
	@csrf
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>
				<input type="text" name="description">
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>
				<input type="text" name="price">
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td>
				<input type="file" name="image">
			</td>
		</tr>
		<tr>
			<td>Quantily</td>
			<td>
				<input type="number" name="quantily">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="">
			</td>
		</tr>
	</table>
</form>