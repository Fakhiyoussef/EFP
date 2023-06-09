<?php


namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\Traitement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $traitements = Traitement::with('patients')->paginate(10);
        $patients = Patients::paginate(10);

        return view('dashboardpages.Paiements', compact('traitements','patients'));

    }

    public function payer(Patients $patient){
        return view('Paiement.payer', compact('patient'));
    }
}
