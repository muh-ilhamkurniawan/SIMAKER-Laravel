<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Buat beberapa contoh pengguna (users)
        DB::table('users')->insert([
            'name' => 'Operator Kutoarjo',
            'username' => 'operator_kta',
            'level' => 'operator',
            'password' => Hash::make('operator_kta'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Kutoarjo',
            'username' => 'admin_kta',
            'level' => 'admin',
            'password' => Hash::make('admin_kta'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan lebih banyak data jika perlu
    }
}
