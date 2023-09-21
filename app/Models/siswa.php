<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $tabel = 'siswas';
    protected $primarykey = 'id';
    protected $fillable = ['nama_sekolah', 'alamat', 'jurusan', 'jumlah_guru'];

}
