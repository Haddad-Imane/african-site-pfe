<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Textile;

class TextileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed the first textile
        Textile::create([
            'nom' => 'African Fabric Wax Batik #2044',
            'categorie' => 'african_fabric',
            'image' => 'https://media.istockphoto.com/id/483232645/photo/african-fabrics-from-ghana-west-africa.jpg?s=612x612&w=0&k=20&c=mTjDHhoKKbQ1r2RvujFLHNM9MZssIZMja5SLMI9MuCE=.jpg',
            'prix' => 112.00,
        ]);

        // Seed the second textile
        Textile::create([
            'nom' => 'African Fabric Wax Batik #2045',
            'categorie' => 'african_fabric',
            'image' => 'african_fabric_2045.jpg',
            'prix' => 112.00,
        ]);

        // Add more textiles as needed
         Textile::create([
            'nom' => 'Another Textile',
            'categorie' => 'another_category',
            'image' => 'another_image.jpg',
             'prix' => 99.99,
         ]);
    }
}
