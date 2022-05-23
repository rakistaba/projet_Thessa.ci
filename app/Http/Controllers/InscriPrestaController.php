<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;
use Illuminate\Support\Facades\Hash;

class InscriPrestaController extends Controller
{
    public function inscripresta()
    {
        return view('inscriptionpresta');
    }

    public function submit(Request $request)
    {

       if ($request->hasFile('image')) {
        $photo= time(). '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('photo', $photo);
       }
    
        prestataires::create([
            'nom_prest'=>$request->nom,
            'prenom_prest'=>$request->prenom,
            'ville_prest'=>$request->ville,
            'contact_prest'=>$request->contact,
            'metier_prest'=>$request->metier,
            'email_prest'=>$request->email,
            'langue_prest'=>$request->langue,
            'sexe_prest'=>$request->sexe,
            'age_prest'=>$request->age,
            'imagePath'=>$photo,
            'domaine_prest'=>collect($request->domaine)->implode(','),
            'description_prest'=>$request->description,
            'password_prest'=>Hash::make($request->password),
        ]);

        return redirect()->back()->with('succes', 'Votre demande a été effectué.');
    }

   
}




