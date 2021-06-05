<!DOCTYPE html>
<html>
<title>Data</title>

<head>
    <style>
        input[type=text],
        select {
            width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        .button {
            /* width: 100%; */
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none
        }

        .button-hijau {
            background-color: #4CAF50;
        }

        .button-biru {
            background-color: #03A9F4;
        }

        .button-orange {
            background-color: #eda215;
        }

        .button-merah {
            background-color: #ed4015;
        }
    </style>
</head>

<body>
    <br>
    <a href="{{route('mahasiswa.create')}}" class="button button-hijau">Tambah Data Mahasiswa</a>
    <a href="{{route('jurusan.index')}}" class="button button-biru">Halaman Jurusan</a>
    <div style="text-align: right;">
        <form action="/mahasiswa/show" method="GET">
            <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari') }}">
            <input type="submit" class="button button-hijau" value="CARI">
        </form>
    </div>
    <br><br>
    <table id="customers">
        <tr>
            <th>No.</th>
            <th>NBI</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach($mahasiswa as $mhs => $m)
        <tr>
            <td>{{$mhs + 1}}</td>
            <td>{{$m->nbi}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->jurusan}}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="button button-orange">Edit</a>
                    <button type="submit" class="button button-merah">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>