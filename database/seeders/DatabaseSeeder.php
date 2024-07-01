<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            TrainsTableSeeder::class,
            UsersTableSeeder::class,
            // Tambahkan seeder lain di sini
        ]);
    }
}
