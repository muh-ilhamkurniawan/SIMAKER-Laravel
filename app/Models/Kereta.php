<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    protected $table = 'kereta'; // Nama tabel yang tepat
    public $timestamps = false; // Tidak menggunakan timestamps
    protected $primaryKey = 'no_ka'; // Sesuaikan dengan nama kolom primary key
    public $incrementing = false; // Atur menjadi true jika primary key berupa auto-increment
    protected $fillable = ['no_ka','nama', 'tujuan', 'kelas', 'kedatangan', 'keberangkatan']; // Atau gunakan guarded untuk kolom yang boleh diisi
}
