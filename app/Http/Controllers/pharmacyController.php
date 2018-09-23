<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pharmacyController extends Controller
{
    public function index(){
    	return view('pharmacy.homePharma.homePharma');
    }
    public function pharmaSellmedicine(){
    	return view('pharmacy.homePharma.sellmedicine');
    }
    public function pharmaSellhistory(){
    	return view('pharmacy.homePharma.sellhistory');
    }
}
