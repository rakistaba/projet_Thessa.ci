<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestataires;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prests=prestataires::get();
        return view('home', compact('prests'));
    }
}
