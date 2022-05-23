<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;

class PostulantController extends Controller
{
    public function postulant()
    {
        $postulants=prestataires::get();
        return view('postulant', compact('postulants'));
    }

  
}
