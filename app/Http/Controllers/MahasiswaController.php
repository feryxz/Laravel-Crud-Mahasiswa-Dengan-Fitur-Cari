<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('jurusans', 'mahasiswas.idjurusan', '=', 'jurusans.id')
            ->select('mahasiswas.*', 'jurusans.jurusan')
            ->get();
        return view('mahasiswa0076.index', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa0076.create', [
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Mahasiswa::create([
            'nama' => $request->nama,
            'nbi' => $request->nbi,
            'idjurusan' => $request->jurusan,
        ]);
        return redirect('mahasiswa')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $mahasiswa = DB::table('mahasiswas')
            ->join('jurusans', 'mahasiswas.idjurusan', '=', 'jurusans.id')
            ->select('mahasiswas.*', 'jurusans.jurusan')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('mahasiswa0076.cari', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findorfail($id);
        $jurusan = Jurusan::all();
        return view('mahasiswa0076.edit', compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = [
            'nama' => $request->nama,
            'nbi' => $request->nbi,
            'idjurusan' => $request->jurusan,
        ];

        Mahasiswa::whereId($id)->update($mahasiswa);
        return redirect('mahasiswa')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::findorfail($id);
        $data->delete();
        return redirect('mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}
