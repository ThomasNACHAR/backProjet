<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
            'name' => 'Bricolage',
            'description' => 'Pour faire les travaux !'
        ]);

        Category::create([
            'name' => 'Jeux vidéo',
            'description' => 'Pour les gamers !'
        ]);

        Category::create([
            'name' => 'Électroménager',
            'description' => 'Machines à laver, réfrigérateurs...'
        ]);

    }
}
