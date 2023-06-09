<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() 
    {
        $patients = Patients::paginate(7);
        return view('dashboardpages.Dashboard',compact('patients'));
    }
}
