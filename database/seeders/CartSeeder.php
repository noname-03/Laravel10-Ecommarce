<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::create([
            'user_id' => 2,
            'product_id' => 1,
            'unit_variant' => '10',
            'qty' => 1,
        ]);

        Cart::create([
            'user_id' => 2,
            'product_id' => 2,
            'unit_variant' => 'XL',
            'qty' => 1,
        ]);
    }
}