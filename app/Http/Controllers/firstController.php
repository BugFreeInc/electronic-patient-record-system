<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
	public function contact(){
    	return view('frontEnd.home.contact');
    }




    public function index(){
    	return view('frontEnd.home.homeContant');
    }
    public function doctorLogin(){
    	return view('doctor.login');
    }
    public function patientLogin(){
    	return view('patient.login');
    }
    public function pharmacyLogin(){
    	return view('pharmacy.login');
    }
    public function adminLogin(){
    	if(Session('adminlog')=='admin'){
            return view('admin.homeAdmin.homeAdmin');
            }
        else{
           return view('admin.login');
       }
    }
   
}
