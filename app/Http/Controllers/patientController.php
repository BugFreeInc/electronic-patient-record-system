<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    public function prescribeHistory(){

    	return view('patient.homePatient.prescribeHistoryPatient');
    }
    public function buyingHistory(){

    	return view('patient.homePatient.buyingHistoryPatient');
    }
}
