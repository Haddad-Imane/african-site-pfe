<?php
// database/seeders/TextileSeeder.php

namespace Database\Seeders;

use App\Models\Textile;
use Illuminate\Database\Seeder;

class TextileSeeder extends Seeder
{
    public function run()
    {
        Textile::create([
            'name' => 'MORROCAN CARPET #19G',
            'code' => '19G',
            'description' => 'For centuries, Moroccan artisans have crafted exquisite carpets that blend tradition and artistry.',
            'price' => 1099.99,
            'categorie' => 'moroccan_carpet',
        ]);

        Textile::create([
            'name' => 'MORROCAN CLOTH #VEE',
            'code' => 'VEE',
            'description' => 'Traditional Moroccan cloth with intricate patterns.',
            'price' => 1049.99,
            'categorie' => 'moroccan_cloth',
        ]);

        Textile::create([
            'name' => 'AFRICAN FABRIC #KNT',
            'code' => 'KNT',
            'description' => 'Vibrant African fabric with unique designs.',
            'price' => 1029.99,
            'categorie' => 'african_fabric',
        ]);

        // Ajoutez plus de textiles si nécessaire
    }
}
