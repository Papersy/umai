<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BibliografiaController extends Controller
{
    public function show()
    {
        return view('bibliografia');
    }
}
