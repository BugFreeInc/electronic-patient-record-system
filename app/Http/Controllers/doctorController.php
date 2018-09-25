<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\addingDoctor;
use App\addingPharmacy;
use App\contact;
use App\DoctorInfo;
use Mail;
use Hash;
use App\Prescribtion;
class doctorController extends Controller
{
     public function doctor(){
        if(Session('pass')=='ok'){
            return view('doctor.home.home');
            }
        else{
            return redirect('/doctorLogin');
       }   	
    }


    public function generalPrescribe(){
        if(Session('pass')=='ok'){
            return view('doctor.home.generalprescribe');
            }
        else{
            return redirect('/doctorLogin');
       } 
    	
    	
    }
     public function patientHistory(){
        if(Session('pass')=='ok'){
            return view('doctor.home.patientHistory');
            }
        else{
            return redirect('/doctorLogin');
       } 	
    	
    }

    public function Signupdoctor(Request $request){
          $this->validation($request);
          if(addingDoctor::where('email',$request->email)->first() && addingDoctor::where('RegID',$request->RegID)->first())
          {
            $tdata=new DoctorInfo();
            $tdata->name=$request->name;
            $tdata->RegID=$request->RegID;
            $tdata->Qualification=$request->Qualification;
            $tdata->Specialist=$request->Specialist;
            $tdata->email=$request->email;
            $tdata->password=bcrypt($request->password);
            $tdata->save();
            return redirect('/doctorLogin')->with('signup','Your Account Is Ready');

          }
          else{
            return redirect('/doctorLogin')->with('status','Your Mail or Reg. ID Is Unauthorized');
           }

    }
    public function validation($request){
        return  $this->Validate($request, [
              'name' => 'required|max:255',
              'RegID' => 'required|unique:DoctorInfos|max:255',
              'Qualification' => 'required|max:255',
              'Specialist' => 'required|max:255',
              'email' => 'required|email|unique:DoctorInfos|max:255',
              'password' => 'required|confirmed|max:255',
              
          ]);
      }



      public function checkDoctor(Request $request){
        
        if($data =DoctorInfo::where('RegID',$request->RegID)->first())
        {
            if($data->RegID == $request->RegID && Hash::check($request->password,$data->password)){
                Session::put('pass','ok');
                Session::put('DrName',$data->name);
                Session::put('DrID',$data->RegID);
                Session::put('DrQa',$data->Qualification);
                Session::put('DrSpec',$data->Specialist);
                return redirect('/doctorHomepage');
                
            }
            else{
                return redirect('/doctorLogin')->with('signup','Password Wrong'); 
            }
 

        }
         else{
            return redirect('/doctorLogin')->with('signup','Your ID Is Unauthorized If You are Invited then Signup'); 
         }

      }
    
    
      public function logout(){
        session()->forget('pass');
        session()->forget('DrID');
        session()->forget('DrName');
        session()->forget('DrQa');
        session()->forget('DrSpec');
    
        return redirect('/');
    }


    public function SavePrescribtion(Request $request){
    $Pdata=new Prescribtion();
    $data1=$request->nid;
    $data2=$request->Diseaseinfo;
    
    /// Handeling For 5 medicin
    $data01="<b>".$request->Medname."</b> Per day ".$request->Dogeperday." Time/Times , Take ".$request->select. " for ".$request->duration." day/days<br>";
    $data02="<b>".$request->Medname0."</b> Per day ".$request->Dogeperday0." Time/Times , Take ".$request->select0. " for ".$request->duration0." day/days<br>";
    $data03="<b>".$request->Medname1."</b> Per day ".$request->Dogeperday1." Time/Times , Take ".$request->select1. " for ".$request->duration1." day/days<br>";
    $data04="<b>".$request->Medname2."</b> Per day ".$request->Dogeperday2." Time/Times , Take ".$request->select2. " for ".$request->duration2." day/days<br>";
    $data05="<b>".$request->Medname3."</b> Per day ".$request->Dogeperday3." Time/Times , Take ".$request->select3. " for ".$request->duration3." day/days<br>";
    
    $data3=$data01;

    if($request->Medname0==null){
        $data3=$data01;
    }
    
   elseif($request->Medname1==null){
        $data3=$data01.$data02;
    }
    elseif($request->Medname2==null){
        $data3=$data01.$data02.$data03;
    }
    elseif($request->Medname3==null){
        $data3=$data01.$data02.$data03.$data04;
    }
    else{
        $data3=$data01.$data02.$data03.$data04.$data05; 
    }
    date_default_timezone_set("Asia/Dhaka");
    $date = date('d-m-Y h:i:s A');

    $Pdata->nid=$data1;
    $Pdata->Diseaseinfo=$data2;
    $Pdata->Medicine=$data3;
    $Pdata->DrID=Session('DrID');
    $Pdata->DrName=Session('DrName');
    $Pdata->Date=$date;
    $Pdata->save();
    return redirect('/generalPrescribe')->with('medicine','Prescribtion Added'); 
   
}

public function ShowPatientHistory(Request $request){
    if($data = Prescribtion::where('nid',$request->nid)->first())
    {
        $tdata =Prescribtion::where('nid',$request->nid)->get();
        return view('doctor.home.patientHistory',['data'=>$tdata]);
            
    }
        else{
            return redirect('/patientHistory')->with('ck','Patient does not exist!'); 
        }


    } 






}