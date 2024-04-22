<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;

class ServeursTableSeeder extends Seeder
{
    public function run()
    {
        Serveur::create([
            'nom' => 'ali farnini',
            'date_embauche' => '2024-01-15'
        ]);

        Serveur::create([
            'nom' => 'ayoub mingach',
            'date_embauche' => '2023-12-20'
        ]);

    }
}

