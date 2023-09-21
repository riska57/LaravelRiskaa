@extends('home')
@section('student')

<h1>Tambah Data</h1>
<div class="mb-3">
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolah"
                              plecoholder="Tulis namamu" value="{{ $sekolah->name}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat sekolah</label>
                              <input type="text" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolah"
                              placeholder="Tulis Alamat lengkpmu" value="{{ $sekolah->address}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="example-text-input" placeholder="Tulis Jurusan"
                              placeholder= "Tulis Jurusan" value= "{{$sekolah->jurusan}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="example-text-input" placeholder="Tulis Jumlah Guru"
                              placeholder= "Tulis Jumblah Guru" value= "{{$sekolah->jumblah_guru}}">
                            </div>

                            <button class="btn btn-primary" value="simpan">Simpan</button>

@endsection