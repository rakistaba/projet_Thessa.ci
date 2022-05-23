<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataires;

class SelectionController extends Controller
{
    public function selection(prestataires $prest)
    {
        return view('selection', compact('prest'));
    }
}
