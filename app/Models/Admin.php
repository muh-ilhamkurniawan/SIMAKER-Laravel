<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; // Nama tabel yang tepat
    public $timestamps = false; // Tidak menggunakan timestamps
    protected $primaryKey = 'id_admin'; // Sesuaikan dengan nama kolom primary key
    public $incrementing = true; // Atur menjadi true jika primary key berupa auto-increment
    protected $fillable = ['username', 'password', 'level', 'nama']; // Atau gunakan guarded untuk kolom yang boleh diisi
}