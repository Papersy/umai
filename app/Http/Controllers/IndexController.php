<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class IndexController extends Controller
{
    public function index()
    {
        // Получаем данные из файла конфигурации
        $recipes = Recipe::all();

        // Передаем данные в представление
        return view('index', compact('recipes'));
    }
}
