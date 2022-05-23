<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
use Illuminate\Support\Facades\Hash;

class InscriClientController extends Controller
{
    public function inscriclient(Request $request)
    {
        return view('inscriptionclient');
    }


    public function submit(Request $request)
    {
        
        if ($this->Validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            ])) {
                clients::create([
                    'nom_clt'=>$request->nom,
                    'prenom_clt'=>$request->prenom,
                    'ville_clt'=>$request->ville,
                    'commune_clt'=>$request->commune,
                    'teleClient'=>$request->contact,
                    'email_clt'=>$request->email,
                    'password_clt'=>Hash::make($request->password),
                ]);
                return redirect()->route('connexion');
            }
    


        

        
    }

    

   
}

