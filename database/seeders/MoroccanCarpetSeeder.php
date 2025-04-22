<?php

// database/seeders/MoroccanCarpetSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MoroccanCarpet;

class MoroccanCarpetSeeder extends Seeder
{
    public function run()
    {
        // Exemple de données à insérer
        $carpets = [
            [
                'name' => 'MORROCAN CARPET PIRO',
                'code' => 'CARPET001',
                'description' => 'A beautiful handwoven Moroccan carpet.',
                'price' => 1080.00,
            ],
            [
                'name' => 'MORROCAN CARPET FIRE',
                'code' => 'CARPET002',
                'description' => 'A vibrant Moroccan carpet with fiery colors.',
                'price' => 1080.00,
            ],
            [
                'name' => 'MORROCAN CARPET MORE',
                'code' => 'CARPET003',
                'description' => 'A luxurious Moroccan carpet with intricate patterns.',
                'price' => 1080.00,
            ],
            [
                'name' => 'MORROCAN CARPET & THE',
                'code' => 'CARPET004',
                'description' => 'A unique Moroccan carpet with a modern twist.',
                'price' => 1080.00,
            ],
        ];

        // Insérer les données dans la table
        foreach ($carpets as $carpet) {
            MoroccanCarpet::create($carpet);
        }
    }
}
