<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains'; // Nama tabel yang tepat
    public $timestamps = false; // Tidak menggunakan timestamps
    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key
    public $incrementing = false; // Atur menjadi true jika primary key berupa auto-increment
    protected $fillable = ['id','name', 'destination', 'category', 'arrival', 'departure']; // Atau gunakan guarded untuk kolom yang boleh diisi
}
