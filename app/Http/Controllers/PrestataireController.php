<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;
use App\Models\softDeletes;

class PrestataireController extends Controller
{
    public function prestataire()
    {
        $prests=prestataires::withTrashed()->oldest('nom_prest')->get();
        return view('prestataire',compact('prests'));
    }

    public function destroy(prestataires $prest)
    {
        $prest->delete();
        return redirect()->back()->with('info', 'Le prestataire a bien été mise dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        prestataires::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return redirect()->back()->with('info', 'Le prestataire a bien été supprimé définitivement.');
    }
    
    public function restore($id)
    {
        prestataires::withTrashed()->whereId($id)->firstOrFail()->restore();
        return redirect()->back()->with('info', 'Le prestataire a bien été restauré.');
    }


     
}
