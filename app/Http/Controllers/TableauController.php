<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prestataires;

class TableauController extends Controller
{
    public function tableau(prestataires $prest)
    {
        $clients=User::all();
        return view('tableau', compact('clients'));
    }

   
}
