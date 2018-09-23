<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function home(){
   	return view('admin.homeAdmin.homeAdmin');
   }
   public function dradd(){
   	return view('admin.doctorAdmin.addDoctor');
   }
   public function drlist(){
   	return view('admin.doctorAdmin.listDoctor');
   }
    public function pharmacyAdd(){
   	return view('admin.pharmacyAdmin.addPharmacy');
   }
   public function pharmacyList(){
   	return view('admin.pharmacyAdmin.phaprmacyList');
   }
}
