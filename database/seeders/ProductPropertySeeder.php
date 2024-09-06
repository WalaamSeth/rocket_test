<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\Property;
use Illuminate\Database\Seeder;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = Product::where('name', 'Книжный стеллаж')->first();
        $product2 = Product::where('name', 'Настенный светильник')->first();
        $product3 = Product::where('name', 'Комод')->first();

        $property1 = Property::where('name', 'цвет материала')->first();
        $property2 = Property::where('name', 'цвет арматуры')->first();
        $property3 = Property::where('name', 'бренд')->first();

        if ($product1 && $property1) {
            ProductProperty::create([
                'product_id' => $product1->id,
                'property_id' => $property1->id,
                'value' => 'черный',
            ]);
        }

        if ($product1 && $property2) {
            ProductProperty::create([
                'product_id' => $product1->id,
                'property_id' => $property2->id,
                'value' => 'красный',
            ]);
        }

        if ($product1 && $property3) {
            ProductProperty::create([
                'product_id' => $product1->id,
                'property_id' => $property3->id,
                'value' => 'Marshall',
            ]);
        }
    }
}
