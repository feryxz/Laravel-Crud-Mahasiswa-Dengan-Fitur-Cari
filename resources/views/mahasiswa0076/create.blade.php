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
		<form action="{{ route('mahasiswa.store') }}" method="POST">
			@csrf
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama" placeholder="Nama..">

			<label for="nbi">NBI</label>
			<input type="text" id="nbi" name="nbi" placeholder="NBI..">

			<!-- <label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" placeholder="Jurusan.."> -->

			<label for="jurusan">Jurusan</label>
			<select id="jurusan" name="jurusan">
				@foreach($jurusan as $j)
				<option value="{{$j->id}}">{{$j->jurusan}}</option>
				@endforeach
			</select>

			<button type="submit" value="Submit">Simpan</button>
		</form>
	</div>

</body>

</html>