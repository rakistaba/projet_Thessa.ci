<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;

class PostulantController extends Controller
{
    public function postulant()
    {
        $postulants=Prestataire::get();
        return view('postulant', compact('postulants'));
    }

  
}
