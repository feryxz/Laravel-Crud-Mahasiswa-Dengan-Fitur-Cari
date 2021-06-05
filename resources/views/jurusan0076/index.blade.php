<!DOCTYPE html>
<html>
<title>Data Jurusan</title>

<head>
    <style>
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
    <a href="{{route('jurusan.create')}}" class="button button-biru">Tambah Data Jurusan</a>
    <a href="{{route('mahasiswa.index')}}" class="button button-hijau">Halaman Mahasiswa</a>
    <br><br>
    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach($jurusan as $jur => $j)
        <tr>
            <td>{{$jur + 1}}</td>
            <td>{{$j->jurusan}}</td>
            <td>
                <form action="{{ route('jurusan.destroy', $j->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('jurusan.edit', $j->id) }}" class="button button-orange">Edit</a>
                    <button type="submit" class="button button-merah">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>