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
		<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
			@csrf
			@method('patch')
			<label for="nama">Nama</label>
			<input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama}}">

			<label for="nbi">NBI</label>
			<input type="text" id="nbi" name="nbi" value="{{ $mahasiswa->nbi}}">

			<!-- <label for="jurusan">Jurusan</label>
			<input type="text" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan}}"> -->

			<label for="jurusan">Jurusan</label>
			<select id="jurusan" name="jurusan">
				@foreach($jurusan as $jur => $j)
				<option value="{{$j->id}}" @if($j->id == $mahasiswa->idjurusan)
					selected
					@endif
					>{{$j->jurusan}}</option>
				@endforeach
			</select>

			<button type="submit" value="Submit">Simpan</button>
		</form>
	</div>

</body>

</html>
<!-- <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
		@csrf
		@method('patch')
		<div class="form-group">
			<label>Nama</label>
			<input required type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama}}">
		</div>
		<div class="form-group">
			<label>NBI</label>
			<input required type="text" class="form-control" name="nbi" value="{{ $mahasiswa->nbi}}">
		</div>
		<div class="form-group">
			<label>Jurusan</label>
			<input required type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan}}">
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-block">Update Kategori</button>
		</div>
	</form> -->