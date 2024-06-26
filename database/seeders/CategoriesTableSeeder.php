<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Buat beberapa contoh pengguna (categories)
        DB::table('categories')->insert([
            'name' => 'KERETA BARANG',
        ]);

        DB::table('categories')->insert([
            'name' => 'KERETA PENUMPANG',
        ]);

        // Tambahkan lebih banyak data jika perlu
    }
}
