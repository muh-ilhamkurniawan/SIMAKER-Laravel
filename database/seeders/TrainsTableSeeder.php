<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        // Buat beberapa contoh pengguna (trains)
        DB::table('trains')->insert([
            'id' => 'D214',
            'name' => 'SAWUNGGALIH',
            'destination' => 'PASAR SENEN',
            'category' => 'KERETA BARANG',
            'arrival' => '00:00:00',  // Nilai default atau sesuai dengan data yang ada
            'departure' => '00:00:00',  // Nilai default atau sesuai dengan data yang ada
        ]);

        // Tambahkan lebih banyak data jika perlu
    }
}
