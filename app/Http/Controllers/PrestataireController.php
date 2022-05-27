<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;
use App\Models\softDeletes;

class PrestataireController extends Controller
{
    public function prestataire()
    {
        $prests=Prestataire::withTrashed()->oldest('nom_prest')->get();
        return view('prestataire',compact('prests'));
    }

    public function destroy(Prestataire $prest)
    {
        $prest->delete();
        return redirect()->back()->with('info', 'Le prestataire a bien été mise dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Prestataire::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return redirect()->back()->with('info', 'Le prestataire a bien été supprimé définitivement.');
    }
    
    public function restore($id)
    {
        Prestataire::withTrashed()->whereId($id)->firstOrFail()->restore();
        return redirect()->back()->with('info', 'Le prestataire a bien été restauré.');
    }


     
}
