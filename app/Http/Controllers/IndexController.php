<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;

class IndexController extends Controller
{
    public function index()
    {
        $prests=prestataires::all();
        return view('index',compact('prests'));
    }
}
