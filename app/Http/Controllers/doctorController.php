<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
     public function doctor(){
    	return view('doctor.home.home');
    }
    public function generalPrescribe(){
    	return view('doctor.home.generalprescribe');
    	
    }
     public function patientHistory(){
    	return view('doctor.home.patientHistory');
    	
    }
    

    
}
