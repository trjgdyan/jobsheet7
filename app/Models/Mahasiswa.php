<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table = 'mahasiswas'; //mendefine tabel yang digunakan
    public $timestamps = false;
    protected $primaryKey = 'Nim'; //mendefine primary key pada tabel
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        'No_Handphone',
    ];
}
