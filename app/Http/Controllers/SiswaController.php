<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index() {
        return view('siswas.index', [
            'siswa' => siswa::get()
        ]);    
    }

    public function tambah() {
        return view('siswas.tambah');
    }
    function simpan(Request $request) {
        $siswa=new siswa();
        $siswa->nama_sekolah = $request->nama_sekolah;
        $siswa->alamat = $request->alamat;
        $siswa->jurusan = $request->jurusan;
        $siswa->jumlah_guru = $request->jumlah_guru;

        $siswa->save();
        return redirect()->route('siswas.index');
    }
    
    public function edit($id)
    {
        $siswa = siswa::find($id);

        return view('siswas.edit', [
            'siswa' => $siswa,
        ]);
    }

    public function update(Request $request, $id)
    {
        $siswa = siswa::find($id);

        $siswa->nama_sekolah = $request->nama_sekolah;
        $siswa->alamat = $request->alamat;
        $siswa->jurusan = $request->jurusan;
        $siswa->jumlah_guru = $request->jumlah_guru;

        $siswa->save();

        return redirect()->route('siswas.index');

    }
    function destroy($id) {
        $siswa = siswa::find($id);

        $siswa->delete();
        return redirect()->route('siswas.index');

        session()->flash('danger', 'Data berhasil dihapus.');
       
    }

    
}
