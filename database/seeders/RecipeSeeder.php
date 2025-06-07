<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = config('new_recipes');

        foreach ($recipes as $key => $recipe) {
            Recipe::create([
                'name'=> $recipe['name'],
                'time' => $recipe['time'],
                'portions' => $recipe['portions'],
                'score' => $recipe['score'],
                'main_img'=> $recipe['main_img'],
                'second_img'=> $recipe['second_img'],
                'desc'=> $recipe['desc'],
                'ingredients'=> $recipe['ingredients'],
                'instruction'=> $recipe['instruction'],
            ]);
        }
    }
}
