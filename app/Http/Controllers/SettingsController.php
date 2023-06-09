<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traitement;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        $actes = Traitement::all();

        return view('settings',['traitements' => $actes]);        
    }

    
    public function insertPrice(Request $request)
    {
        $data = $request->except('_token');
    
        foreach ($data as $traitementId => $prix) {
            $traitementId = str_replace('prix', '', $traitementId); // Supprimer la partie 'prix' du nom de l'élément
            Traitement::where('Num_Traitement', $traitementId)->update(['prix' => $prix]);
        }
    
        // Autres instructions si nécessaire...
    
        return redirect()->back()->with('success', 'Prix mis à jour avec succès.');
    }
    

}
