<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController
{
    public function show(Request $request)
    {
        $recipes = Recipe::query();

        $favorites = json_decode($request->cookie('favorites', '[]'), true);

        // Фильтрация по поиску
        $search = $request->input('search');

        if ($search) {
            $recipes = $recipes->where('name', 'like', '%' . $search . '%')
            ->orWhere('desc', 'like', '%'. $search . '%');
        }

        $recipes = $recipes->get();

        return view('recipe', compact('recipes', 'favorites'));
    }


    public function favorites() {
        // Получаем список любимых рецептов из куки
        $favorites = json_decode(request()->cookie('favorites', '[]'), true);

        // Получаем все рецепты из конфигурации
        $favoriteRecipes = Recipe::whereIn('id', $favorites)->get();

        // Передаем на страницу только любимые рецепты
        return view('favorites', compact('favoriteRecipes'));
    }
}
