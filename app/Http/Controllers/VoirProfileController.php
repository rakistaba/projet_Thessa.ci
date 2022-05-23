<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;

class VoirProfileController extends Controller
{
    public function voirprofile(prestataires $prest)
    {
    
        return view('voirprofile', compact('prest'));
    }
    
}
