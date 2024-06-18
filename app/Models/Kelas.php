<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas'; // Nama tabel yang tepat
    public $timestamps = false; // Tidak menggunakan timestamps
    protected $primaryKey = 'kode_kelas'; // Sesuaikan dengan nama kolom primary key
    public $incrementing = true; // Atur menjadi true jika primary key berupa auto-increment
    protected $fillable = ['nama_kelas']; // Atau gunakan guarded untuk kolom yang boleh diisi

}
