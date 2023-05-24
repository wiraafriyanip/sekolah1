<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable =[
        'nis','nama_siswa','jk','tgllahir','kelas','jurusan','alamat'
    ];
}
