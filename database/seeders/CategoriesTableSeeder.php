<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'titre' => 'bastila',
            'photo' => 'https://morocco-gold.com/wp-content/uploads/2019/10/Moroccan-Pastilla.jpg' 
        ]);

        Category::create([
            'titre' => 'tajine',
            'photo' => 'https://maroc-tourisme-rural.com/wp-content/uploads/2018/05/tajine.jpg'
        ]);

        Category::create([
            'titre' => 'Desserts',
            'photo' => 'https://assets.afcdn.com/recipe/20170207/58671_w1024h576c1cx1171cy1500.jpg'
        ]);


    }
}
