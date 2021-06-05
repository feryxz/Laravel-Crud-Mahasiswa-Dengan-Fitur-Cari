<!DOCTYPE html>
<html>
<title>Edit Data</title>
<style>
	input[type=text],
	select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	button {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	button:hover {
		background-color: #45a049;
	}

	div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}
</style>

<body>

	<h3>Edit Data</h3>

	<div>
		<form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
			@csrf
			@method('patch')

			<label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" value="{{ $jurusan->jurusan}}">

			<!-- <label for="country">Country</label>
			<select id="country" name="country">
				<option value="australia">Australia</option>
				<option value="canada">Canada</option>
				<option value="usa">USA</option>
			</select> -->

			<button type="submit" value="Submit">Simpan</button>
		</form>
	</div>

</body>

</html>