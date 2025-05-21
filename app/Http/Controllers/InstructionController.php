<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class InstructionController
{
    public function show(string $slug)
    {
        if($recipe = Recipe::where("id", $slug)->first()){
            return view('instruction', ['recipe' => $recipe]);
        }
    }
}
