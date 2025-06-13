<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FavoriteController extends Controller
{
    public function toggle(Request $request, $slug)
    {
        $favorites = json_decode($request->cookie('favorites', '[]'), true);

        if (!is_array($favorites)) {
            $favorites = [];
        }

        if (in_array($slug, $favorites)) {
            $favorites = array_values(array_filter($favorites, fn($item) => $item !== $slug));
            $favorited = false;
            
        } else {
            $favorites = array_merge($favorites, [$slug]);
            $favorited = true;
        }

        return response()->json(['favorited' => $favorited])
            ->cookie('favorites', json_encode($favorites), 60 * 24 * 30); // 30 дней
    }
}

