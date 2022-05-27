<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;
use App\Models\PrestataireUser;
use Auth;

class VoirProfileController extends Controller
{
    public function voirprofile(Prestataire $prest)
    {
        return view('voirprofile', compact('prest'));
    }
    
    public function submit(Prestataire $prest)
    {
       Auth::user()->prestataires()->attach($prest->id);
        return redirect()->back()->with('recruter', 'prestataire recruté');
    }

    public function ajouter(Prestataire $prest)
    {
       Auth::user()->prestataires()->attach($prest->id);
        return redirect()->back()->with('recruter', 'prestataire ajouté');
    }
}
