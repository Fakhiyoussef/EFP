<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function loginaffich(Patients $patient)
    {
        return view('login', compact('patient'));
    }

    
}
