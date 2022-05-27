<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;

class IndexController extends Controller
{
    public function index()
    {
        $prests=Prestataire::all();
        return view('index',compact('prests'));
    }
}
