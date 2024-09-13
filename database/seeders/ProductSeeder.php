<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Fender Stratocaster',
                'price' => 1200,
                'description' => 'A high-quality electric guitar.',
                'image_url' => 'assets/image/fender.jpg',
            ],
            [
                'name' => 'Gibson Les Paul',
                'price' => 2500,
                'description' => 'A classic rock guitar.',
                'image_url' => 'assets/image/guitar.jpg',
            ],
            // Add more products as needed
        ]);
    }
}
