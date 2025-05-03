<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RecipeController
{
    public function show(Request $request)
    {
        $recipes = config('recipes');
        $favorites = json_decode($request->cookie('favorites', '[]'), true);

        // Фильтрация по поиску
        $search = $request->input('search');

        if ($search) {
            $recipes = array_filter($recipes, function ($recipe) use ($search) {
                return stripos($recipe['name'], $search) !== false || stripos($recipe['desc'], $search) !== false;
            });
        }

        return view('recipe', compact('recipes', 'favorites'));
    }


    public function favorites() {
        // Получаем все рецепты из конфигурации
        $recipes = config('recipes');

        // Получаем список любимых рецептов из куки
        $favorites = json_decode(request()->cookie('favorites', '[]'), true);

        // Фильтруем рецепты, оставляя только те, которые есть в куки
        $favoriteRecipes = array_filter($recipes, function($key) use ($favorites) {
            return in_array($key, $favorites);
        }, ARRAY_FILTER_USE_KEY);

        // Передаем на страницу только любимые рецепты
        return view('favorites', compact('favoriteRecipes'));
    }
}
