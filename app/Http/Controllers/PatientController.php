<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use App\Exports\PatientsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\PatientRequest;

class PatientController extends Controller
{

    // public function __construct()
    // {
    //     // $this->middleware('auth')->except('home');
        
    // }


    public function home (){
        return view('home');        
    }

    

    public function patients()
    {
        $patients = Patients::paginate(10);
        return view('dashboardpages.Patients', compact('patients'));
    }

    public function Afficher(Patients $patient)
    {
        return view('Patients.AfficherPat', compact('patient'));
    }

    

    public function Ajouter()
    {
        return view('Patients.Ajouter');
    }

    public function supprimer(Patients $patient)
    {
        $patient->delete();
        return redirect()
            ->route('patientspage')
            ->with('success', 'Patient a été bien supprimé ');
    }

    public function modifier(Patients $patient)
    {
        return view('Patients.Modifier', compact('patient'));
    }

    public function update(PatientRequest $request, Patients $patient)
    {
        $formFields = $request->validated();

        //  Stocker les fichiers dans la base de donnée
        $patient->fill($formFields)->save();
<<<<<<< HEAD
        return to_route('patientspage')->with('success', 'Le Patient a été bien modifié ');
=======
        return to_route('patientspage', $patient->NumDoss)
        ->with('success', 'Le Patient a été bien modifié ');
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535
    }

    public function store(PatientRequest $request)
{   
    $formFields = $request->validated();
    

    Patients::create($formFields);

    return redirect()->route('patientspage')->with('success', 'Patient ajouté avec succès.');
}


    public function export() 
    {
        return Excel::download(new PatientsExport, 'Patients.xlsx');
    }


    /*public function search(Request $request){

       return $get_name = $request->search_name;
    }   */
    public function search(Request $request)
    {
        $searchName = $request->search_name;

        // Effectuer la recherche dans la table Patients
        $results = Patients::where('NomPat', $searchName)->get();

        return view('Patients.search', compact('results'));
    }
}
