<!DOCTYPE html>
<html>
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

	<h3>Tambah Data</h3>

	<div>
		<form action="{{ route('jurusan.store') }}" method="POST">
			@csrf
			<label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" placeholder="Jurusan..">

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

<!-- <form action="{{ route('mahasiswa.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<label>Nama</label>
		<input required type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>NBI</label>
		<input required type="text" class="form-control" name="nbi">
	</div>
	<div class="form-group">
		<label>Jurusan</label>
		<input required type="text" class="form-control" name="jurusan">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan Data</button>
	</div>
</form> -->