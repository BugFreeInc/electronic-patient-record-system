<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\addingDoctor;
use App\addingPharmacy;
use App\contact;
use Mail;
use App\PatientInfo;
use Hash;
use App\Prescribtion;
use App\SellHistory;
use App\DoctorCode;

class patientController extends Controller
{
    public function prescribeHistory(){
        if(Session('Ptpass')=='ok'){
            //return view('patient.homePatient.prescribeHistoryPatient');
            if($data = Prescribtion::where('nid',Session('PtID'))->first()){
                $tdata =Prescribtion::where('nid',Session('PtID'))->get();
                return view('patient.homePatient.prescribeHistoryPatient',['data'=>$tdata]);
                    
            }
                else{
                    //return redirect('/prescribeHistory'); 
                    //return "no data";
                return view('patient.homePatient.prescribeHistoryPatient',['pres'=>'prescribtion does not exist!']); 

                }
    }
            
        else{
            return redirect('/patientLogin');
       }   
    	
    }
    public function buyingHistory(){
        if(Session('Ptpass')=='ok'){
           // return view('patient.homePatient.buyingHistoryPatient');
            if($data = SellHistory::where('nid',Session('PtID'))->first())
            {
                $tdata =SellHistory::where('nid',Session('PtID'))->get();
                return view('patient.homePatient.buyingHistoryPatient',['data'=>$tdata]);
                    
            }
                else{
                    return view('patient.homePatient.buyingHistoryPatient',['pres'=>'Buy record does not exist!']); 
                }


    }
            
        else{
            return redirect('/patientLogin');
       }   



    	
    }
    public function SavingPatient(Request $request){
        $this->validation($request);
          $tdata=new PatientInfo();
          $tdata->name=$request->name;
          $tdata->nid=$request->nid;
          $tdata->email=$request->email;
          $tdata->password=bcrypt($request->password);
          $tdata->save();
        return redirect('/patientLogin')->with('signup','Your account create Successfully');
 

    }

    public function validation($request){
        return  $this->Validate($request, [
              'name' => 'required|max:255',
              'nid' => 'required|unique:PatientInfos|max:255',
              'email' => 'required|email|unique:PatientInfos|max:255',
              'password' => 'required|confirmed|max:255',
              
          ]);
      }


      public function PatientLogin(Request $request){
        if($data =PatientInfo::where('nid',$request->nid)->first())
        {
            if($data->nid == $request->nid && Hash::check($request->password,$data->password)){
                Session::put('Ptpass','ok');
                Session::put('PtName',$data->name);
                Session::put('PtID',$data->nid);
                return redirect('/prescribeHistory');
                
            }
            else{
                return redirect('/patientLogin')->with('signup','Password Wrong'); 
            }
 

        }
         else{
            return redirect('/patientLogin')->with('signup','Your Account Does not exist!'); 
         }


      }

      public function logout(){
        session()->forget('Ptpass');
        session()->forget('PtName');
        session()->forget('PtID');
    
        
    
        return redirect('/');
    }



    public function passwordResetCode(Request $request){
        if($data = PatientInfo::where('email',$request->email)->first())
        {
            if($data->email == $request->email){
                Session::put('reset','ok');
                Session::put('Paemail',$data->email);
                Session::put('PaupID',$data->id);
                
                //reset 
    
                if($d = DoctorCode::where('email',$request->email)->first()){
    
                    $d =  DoctorCode::find($d->id);
                    $d->delete();
                    }
            
                     $code=rand(100000, 999999);
                     $tdata=new DoctorCode();
                       $tdata->email=$request->email;
                       $tdata->code=bcrypt($code);
                       $tdata->save();
                       Session::put('ResetMail',$tdata->email);
                       Session::put('ResetCode',$code);
            
                       //mail
                      $maildata=$request->toArray();
                     Mail::send('doctor.resetPass.mail',$maildata,function($massage) use ($maildata)
                     {
                     $massage->to($maildata['email']); 
                     $massage->subject('Reset Your Password'); 
            
                     });
    
    ////
        return redirect('/PaCheckCode');
                
            }
        }
        else{
            return redirect('/patientLogin')->with('signup','Wrong email'); 
        } 
    
    
        
}


public function PaCheckCode(){

    if(Session('reset')=='ok'){
        return view('patient/resetPass/passowordCode');
        }
    else{
        return redirect('/patientLogin');
   } 	
    
}

    public function passwordReset(Request $request){
        if(Session('reset')=='ok'){
            if($data =DoctorCode::where('email',Session('ResetMail'))->first()){
                if(Hash::check($request->code,$data->code)){
                   
                 ///
                 return redirect('/PaShowRepass');
    
                }
                 else{
        return redirect('/PaCheckCode')->with('fail','Code Does not match '); 
           
            }
            }
    
            else{
        return redirect('/PaCheckCode')->with('fail','Code Does not match '); 
            }
            
            
            }
        
        
        
            else{
                return redirect('/patientLogin');
       } 





    
    }

    public function PaShowRepassword(){

        if(Session('reset')=='ok'){
            return view('patient/resetPass/passowordReset');
            }
        else{
            return redirect('/patientLogin');
       } 	
        
    }

    public function PaChangePass(Request $request){
        $this->val($request);
       
        $tdata=PatientInfo::find(Session('PaupID'));
        $tdata->exists = true;
        $tdata->id = Session('PaupID'); 
        $tdata->password=bcrypt($request->password);
        $tdata->save();
        session()->forget('PaID');
        session()->forget('reset');
        return redirect('/patientLogin')->with('signup','Password Successfully Changed');
    
    
    }
    
    public function val($request){
            return  $this->Validate($request, [
                  'password' => 'required|confirmed|max:255',
                  
              ]);
          }


}
