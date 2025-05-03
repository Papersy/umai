<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        // Получаем данные из файла конфигурации
        $recipes = config('new_recipes');

        // Передаем данные в представление
        return view('index', compact('recipes'));
    }
}
