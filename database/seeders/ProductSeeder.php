<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'title' => 'Handcrafted Vase',
            'price' => 150.00,
            'image' => 'vase.jpg',
        ]);

        Product::create([
            'title' => 'Woven Basket',
            'price' => 75.00,
            'image' => 'basket.jpg',
        ]);

        // Add more products as needed
    }
}
