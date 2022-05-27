<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prestataire;
use App\Models\PrestataireUser;
use App\Models\softDeletes;


class TableauController extends Controller
{
    public function tableau()
    {
        $clients=User::get();
        $allclient=[];
        foreach ($clients as $client) {
            $all=$client->with('prestataires')->get();
            // $allclient[]=$all;

        }
    
        
        return view('tableau', compact('all'));
    }

    public function add(PrestataireUser $prest)
    {
        return redirect()->back()->with('recruter', 'prestataire recruter');
    }


   
}
