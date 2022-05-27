<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;
use Illuminate\Support\Facades\Hash;

class AjouPrestaController extends Controller
{
    public function ajoupresta()
    {
        return view('ajouterprestataire');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom_prest' => ['required', 'string', 'max:255'],
            'prenom_prest' => ['required', 'string', 'max:255'],
            'ville_prest' => ['required', 'string', 'max:255'],
            'contact_prest' => ['required', 'max:255'],
            'metier_prest' => ['required', 'max:255'],
            'email_prest' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'langue_prest' => ['required', 'max:255'],
            'sexe_prest' => ['required', 'max:255'],
            'age_prest' => ['required', 'max:255'],
            'imagePath' => ['required'],
            'domaine_prest' => ['required'],
            'description_prest' => ['required'],
            'password_prest' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function submit(Request $request)
    {

       if ($request->hasFile('image')) {
        $photo= time(). '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('photo', $photo);
       }
    
        Prestataire::create([
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
