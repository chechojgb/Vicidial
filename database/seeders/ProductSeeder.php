<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Producto 1', 'price' => 100.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Producto 2', 'price' => 200.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Producto 3', 'price' => 300.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
