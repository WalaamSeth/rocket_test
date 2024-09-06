<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Книжный стеллаж',
            'price' => 2000,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Настенный светильник',
            'price' => 1500,
            'quantity' => 5,
        ]);

        Product::create([
            'name' => 'Комод',
            'price' => 3000,
            'quantity' => 7,
        ]);
    }
}
