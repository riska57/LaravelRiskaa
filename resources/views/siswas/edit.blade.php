@extends('home')

@section('student')
<h2>Edit Data</h2>

<form action="{{ route('siswas.update', $siswa->id) }}" class="" method="post">
    @csrf
    @method ('PUT')
<div class="mb-3">
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah"
                              placeholder="Tulis namamu" value="{{ $siswa->nama_sekolah}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat sekolah</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah"
                              placeholder="Tulis Alamat lengkpmu" value="{{ $siswa->alamat}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan"
                              placeholder= "Tulis Jurusan" value= "{{$siswa->jurusan}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru"
                              placeholder= "Tulis Jumblah Guru" value= "{{$siswa->jumlah_guru}}">
                            </div>

                            <button class="btn btn-primary" value="simpan">Simpan</button>

</form>

@endsection