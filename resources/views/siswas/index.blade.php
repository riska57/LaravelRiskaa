@extends('home')
@section('student')

<h1>Tambah Data</h1>

<div class="card mt-3">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Jumlah Guru</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($siswa as $siswa)
            
            <td>{{ $siswa -> nama_sekolah }}</td>
            <td>{{ $siswa -> alamat }}</td>
            <td>{{ $siswa -> jurusan }}</td>
            <td>{{ $siswa -> jumlah_guru }}</td>
            <td>
                <a href="{{ route('siswas.edit', $siswa->id)}}">Edit</a>
                <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection