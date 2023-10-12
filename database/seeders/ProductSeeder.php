<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'title' => 'Beras Pandan Wangi',
            'price' => '100000',
            'price_retail' => '120000',
            'qty' => 100,
            'weight' => '1',
            'unit' => 'kg',
            'unit_variant' => '1, 5, 10',
            'description' => 'Beras Pandan Wangi',
        ]);

        Product::create([
            'category_id' => 2,
            'title' => 'Kaos Oblong',
            'price' => '100000',
            'price_retail' => '120000',
            'qty' => 100,
            'weight' => '1',
            'unit' => 'Ukuran',
            'unit_variant' => 'L, XL, XXL',
            'description' => 'Kaos Berkuwalitas',
        ]);

        Product::create([
            'category_id' => 2,
            'title' => 'Celana Jeans',
            'price' => '100000',
            'price_retail' => '120000',
            'qty' => 100,
            'weight' => '1',
            'unit' => 'Ukuran',
            'unit_variant' => 'L, XL, XXL',
            'description' => 'Kaos Berkuwalitas',
        ]);

        Product::create([
            'category_id' => 2,
            'title' => 'Hodie Jacket',
            'price' => '100000',
            'price_retail' => '120000',
            'qty' => 100,
            'weight' => '1',
            'unit' => 'Ukuran',
            'unit_variant' => 'L, XL, XXL',
            'description' => 'Kaos Berkuwalitas',
        ]);
    }
}
