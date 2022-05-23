<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\softDeletes;

class PageClientController extends Controller
{
    public function pageclient()
    {
        $clients=User::withTrashed()->oldest('nom')->get();
        return view('pageclient',compact('clients'));
    }

    
    public function destroy(User $client)
    {
        $client->delete();
        return redirect()->back()->with('info', 'Le client a bien été mise dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        User::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return redirect()->back()->with('info', 'Le client a bien été supprimé définitivement.');
    }
    
    public function restore($id)
    {
        User::withTrashed()->whereId($id)->firstOrFail()->restore();
        return redirect()->back()->with('info', 'Le client a bien été restauré.');
    }


}
