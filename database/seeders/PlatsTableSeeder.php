<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plat;

class PlatsTableSeeder extends Seeder
{
    public function run()
    {
        Plat::create([
            'categorie_id' => 2,
            'intitule' => 'Plat 2',
            'description' => ' plat maroccain traditionnelle ',
            'prix' => 120.99,
            'photo' => 'https://www.demotivateur.fr/uploads/938/Tajine.jpg'
        ]);
        
        Plat::create([
            'categorie_id' => 1,
            'intitule' => 'Plat 2',
            'description' => 'plat maroccain tradissionele ',
            'prix' => 120.99,
            'photo' => 'https://recettes.de/images/blogs/amour-de-cuisine-chez-soulef/pastilla-au-poisson-et-fruits-de-mer-4893.640x480.jpg'
        ]);

        Plat::create([
            'categorie_id' => 3,
            'intitule' => 'Plat 3',
            'description' => 'Description du plat 1',
            'prix' => 120.99,
            'photo' => 'https://pointsfromthepacific.boardingarea.com/wp-content/uploads/2016/12/First-Class-Horizontal-appetiser_-main-course-and-dessert.jpg'
        ]);
    }
}

