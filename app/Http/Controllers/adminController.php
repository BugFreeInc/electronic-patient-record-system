<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\addingDoctor;
use App\addingPharmacy;
use App\contact;
use Mail;
class adminController extends Controller
{
   public function home(){
    
    if(Session('adminlog')=='admin')
    {
        $sms=contact::count();
        Session::put('sms',$sms);
        return view('admin.homeAdmin.homeAdmin');
        }
    else{
       return view('admin.login');
       }
  	
   }


   public function dradd(){
    if(Session('adminlog')=='admin')
   {
        return view('admin.doctorAdmin.addDoctor');
        }
    else{
       return view('admin.login');
        }
   	
   }


   public function drlist(){
    if(Session('adminlog')=='admin')
    {
        return view('admin.doctorAdmin.listDoctor');
        }
    else{
       return view('admin.login');
   }
   	
   }


   public function pharmacyAdd(){
    if(Session('adminlog')=='admin')
    {
        return view('admin.pharmacyAdmin.addPharmacy');  

    }
    else{
       return view('admin.login');
      }  
   	
}
   

public function pharmacyList(){
    if(Session('adminlog')=='admin')
    {
        return view('admin.pharmacyAdmin.phaprmacyList');

    }
    else{
       return view('admin.login');
      }   
   	
   }
   
   
   
public function  logincheck(Request $request){
    if($request->name=='admin' && $request->password=='admin'){
      Session::put('adminlog','admin');
      $sms=contact::count();
      Session::put('sms',$sms);
    return redirect('/adminHome');
    }
    else{
        return redirect('/adminLogin')->with('adminlog','Username or password is wrong!');
    }  
}
public function logout(){
    session()->forget('adminlog');

    return redirect('/');
}
//////////////////////data/////////////////////


public function saveingDoctor(Request $request){
    $this->Drvalidation($request);
    addingDoctor::create($request->all());  
    //mail
    $maildata=$request->toArray();
         Mail::send('admin.doctorAdmin.doctorMail',$maildata,function($massage) use ($maildata)
         {
         $massage->to($maildata['email']); 
         $massage->subject('Invited As Doctor'); 

         });
    //mail
    return redirect('/addDoctor')->with('addDr','Doctor Successfully Added');
}

public function Drvalidation($request){
    return  $this->Validate($request, [
          'RegID' => 'required|unique:addingDoctors|max:20',
          'name' => 'required|max:255',
          'email' => 'required|email|unique:addingDoctors|max:255',      
      ]);
  }



public function savingPharmacy(Request $request){
    $this->Phvalidation($request);
    addingPharmacy::create($request->all());  
    //mail
    $maildata=$request->toArray();
         Mail::send('admin.pharmacyAdmin.pharmacyMail',$maildata,function($massage) use ($maildata)
         {
         $massage->to($maildata['email']); 
         $massage->subject('Invited As Pharmacy'); 

         });
    //mail
    return redirect('/addPharmacy')->with('addPh','Pharmacy Successfully Added');
}
public function Phvalidation($request){
    return  $this->Validate($request, [
          'RegID' => 'required|unique:addingPharmacys|max:20',
          'name' => 'required|max:255',
          'email' => 'required|email|unique:addingPharmacys|max:255',      
      ]);
  }

}