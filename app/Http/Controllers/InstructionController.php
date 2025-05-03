<?php

namespace App\Http\Controllers;

class InstructionController
{
    public function show(string $slug)
    {
        if($recipe = config('recipes.'.$slug)){
            return view('instruction', ['recipe' => $recipe]);
        }
    }
}
