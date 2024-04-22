<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommandePlat;

class CommandePlatTableSeeder extends Seeder
{
    public function run()
    {
        CommandePlat::create([
            'commande_id' => 1, 
            'plat_id' => 1, 
            'nombre' => 2
        ]);

    }
}

