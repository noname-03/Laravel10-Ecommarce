<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryProduct::create([
            'name' => 'Pakaian'
        ]);

        CategoryProduct::create([
            'name' => 'Celana'
        ]);

        CategoryProduct::create([
            'name' => 'Jaket'
        ]);
    }
}
