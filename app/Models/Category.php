<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Nama tabel yang tepat
    public $timestamps = false; // Tidak menggunakan timestamps
    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key
    public $incrementing = true; // Atur menjadi true jika primary key berupa auto-increment
    protected $fillable = ['name']; // Atau gunakan guarded untuk kolom yang boleh diisi

}