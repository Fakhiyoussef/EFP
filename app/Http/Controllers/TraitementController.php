<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Requests\TraitementRequest;
use App\Models\Patients;
use App\Models\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    public function Traitindex()
    {
        $traitements = Traitement::with('patients')
            ->whereHas('patients')
            ->paginate(10);
        $patients = Patients::paginate(10);

        return view('dashboardpages.Traitements', compact('traitements', 'patients'));
    }

    public function Ajouter()
    {
        return view('Traitements.Ajouter');
    }

    public function supprimer($id)
    {
        $traitement = Traitement::findOrFail($id);
        $traitement->delete();
        return redirect()
            ->route('traitementpage')
<<<<<<< HEAD
            ->with('success', 'Traitement a été bien supprimé ');
=======
            ->with('success', 'Le traitement a été bien supprimé ');
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535
    }


    public function modifier(Patients $patient, Traitement $traitement)
    {
        return view('Traitements.modifier', compact('patient', 'traitement'));
    }

    // public function update(PatientRequest $request, Traitement $traitement)
    // {
    //     $formFields = $request->validated();

    //     // Store the updated data in the database
    //     $traitement->update($formFields);

    //     return redirect()
    //         ->route('traitementpage', $traitement->Num_Traitement)
    //         ->with('success', 'Le traitement a été bien modifié ');
    // }

<<<<<<< HEAD
    public function update(TraitementRequest $request, Traitement $traitement)
    {
        $formFields = $request->validated();
=======
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535

    public function update(TraitementRequest $request,Traitement $traitement)
{
    $formFields = $request->validated();
    $traitement->update($formFields);
    return redirect()
        ->route('traitementpage', $traitement->Num_Traitement)
        ->with('success', 'Le traitement a été bien modifié ');
}

<<<<<<< HEAD
        return redirect()
            ->route('traitementpage')
            ->with('success', 'Le traitement a été bien modifié ');
    }
=======
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535

    public function store(TraitementRequest $request)
    {
        // Validation des données par PatientRequest :
        $formFields = $request->validated();
<<<<<<< HEAD
        
       
=======
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535

        // Insertion des données dans la table patients :
        Traitement::create($formFields);

        return redirect()
            ->route('traitementpage')
            ->with('success', ' Le traitement ajouté avec succès.');
    }
}
