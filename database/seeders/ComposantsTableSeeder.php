<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Composant;

class ComposantsTableSeeder extends Seeder
{
    public function run()
    {
        Composant::create([
            'libelle' => 'Composant 1'
        ]);

    }
}

