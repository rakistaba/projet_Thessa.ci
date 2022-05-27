<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;
use App\Models\User;
use Auth;

class SelectionController extends Controller
{
    public function selection()
    {
        $clients=User::all();
        $allclient=[];
        foreach ($clients as $client) {
            $all=$client->with('prestataires')->get();
            $allclient[]=$all;

        }

        return view('selection', compact('allclient'), compact('client'));
    }

    
}
