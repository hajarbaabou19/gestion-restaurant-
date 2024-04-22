<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;

class CommandesTableSeeder extends Seeder
{
    public function run()
    {
        Commande::create([
            'serveur_id' => 1, 
            'numero_table' => 'T1',
            'etat' => 'en cours',
            'paye' => false
        ]);

        Commande::create([
            'serveur_id' => 2, 
            'numero_table' => 'T2',
            'etat' => 'en cours',
            'paye' => false
        ]);

    }
}

