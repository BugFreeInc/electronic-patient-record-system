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
use App\PharmacyInfo;
use App\SellHistory;
use App\DoctorCode;
class pharmacyController extends Controller
{
    public function index(){
        if(Session('Ppass')=='ok'){
            return view('pharmacy.homePharma.homePharma');
    }
            
        else{
            return redirect('/pharmacyLogin');
       }   
    
    }
    	
    public function pharmaSellmedicine(){
        if(Session('Ppass')=='ok'){
            return view('pharmacy.homePharma.sellmedicine');
        }   
        else{
            return redirect('/pharmacyLogin');
       }  

    	
    }
    public function pharmaSellhistory(){
        if(Session('Ppass')=='ok'){
           
            if($data = SellHistory::where('PhID',Session('PhID'))->first())
        {
            $tdata =SellHistory::where('PhID',Session('PhID'))->get();
            return view('pharmacy.homePharma.sellhistory',['data'=>$tdata]);
                
        }
            else{
                return redirect('/pharmaHomepage')->with('ck','Patient does not exist!'); 
            }
    
    
        





            return view('pharmacy.homePharma.sellhistory');




        }   
        else{
            return redirect('/pharmacyLogin');
       }  
    	
    }
    public function SavePharma(Request $request){
        $this->validation($request);
        if(addingPharmacy::where('email',$request->email)->first() && addingPharmacy::where('RegID',$request->RegID)->first())
        {
          $tdata=new PharmacyInfo();
          $tdata->RegID=$request->RegID;
          $tdata->PharmacyName=$request->PharmacyName;
          $tdata->OwnerName=$request->OwnerName;
          $tdata->email=$request->email;
          $tdata->password=bcrypt($request->password);
          $tdata->save();
          return redirect('/pharmacyLogin')->with('signup','Your Account Is Ready');

        }
        else{
          return redirect('/pharmacyLogin')->with('status','Your Mail or Reg. ID Is Unauthorized');
         }

  
    }


    public function validation($request){
        return  $this->Validate($request, [
              
              'RegID' => 'required|unique:PharmacyInfos|max:255',
              'PharmacyName' => 'required|max:255',
              'OwnerName' => 'required|max:255',
              'email' => 'required|email|unique:PharmacyInfos|max:255',
              'password' => 'required|confirmed|max:255',
              
          ]);
      }


    public function CheckPharma(Request $request){
        if($data =PharmacyInfo::where('RegID',$request->RegID)->first())
        {
            if($data->RegID == $request->RegID && Hash::check($request->password,$data->password)){
                Session::put('Ppass','ok');
                Session::put('PhName',$data->PharmacyName);
                Session::put('PhID',$data->RegID);
                Session::put('OwnerName',$data->OwnerName);
                return redirect('/pharmaHomepage');
                
            }
            else{
                return redirect('/pharmacyLogin')->with('signup','Password Wrong'); 
            }
 

        }
         else{
            return redirect('/pharmacyLogin')->with('signup','Your ID Is Unauthorized If You are Invited then Signup'); 
         }

    }

    public function logout(){
        session()->forget('Ppass');
        session()->forget('PhName');
        session()->forget('PhID');
        session()->forget('OwnerName');
        
    
        return redirect('/');
    }

    public function ShowPatientHistory(Request $request){
        if($data = Prescribtion::where('nid',$request->nid)->first())
        {
            $tdata =Prescribtion::where('nid',$request->nid)->get();
            return view('pharmacy.homePharma.homePharma',['data'=>$tdata]);
                
        }
            else{
                return redirect('/pharmaHomepage')->with('ck','Patient does not exist!'); 
            }
    
    
        } 
    
        public function ShowMed(Request $request){
            if($data = Prescribtion::where('nid',$request->nid)->first())
            {
                $tdata =Prescribtion::where('nid',$request->nid)->get();
                return view('pharmacy.homePharma.sellmedicine',['data'=>$tdata]);
                    
            }
                else{
                    return redirect('/sellmedicine')->with('ck','Patient does not exist!'); 
                }
        
        
            } 


      public function SellMedicine(Request $request){
        $Pdata=new SellHistory();
        $data1=$request->nid;
        $data2=Session('PhID');
        $data3=Session('PhName');
        date_default_timezone_set("Asia/Dhaka");
        $date = date('d-m-Y h:i:s A');

        $data01="<b>".$request->MedicineName."</b> Quantity : <b>".$request->Quantity."</b> Price <b>".$request->Price."</b> take<br>";

        $data02="<b>".$request->MedicineName0."</b> Quantity : <b>".$request->Quantity0."</b> Price <b>".$request->Price0."</b> take<br>";

        $data03="<b>".$request->MedicineName1."</b> Quantity : <b>".$request->Quantity1."</b> Price <b>".$request->Price1."</b> take<br>";

        $data05="<b>".$request->MedicineName2."</b> Quantity : <b>".$request->Quantity2."</b> Price <b>".$request->Price2."</b> take<br>";

        $data05="<b>".$request->MedicineName3."</b> Quantity : <b>".$request->Quantity3."</b> Price <b>".$request->Price3."</b> take<br>";

        $data4=$data01;

        if($request->MedicineName0==null){
            $data4=$data01;
        }
        
       elseif($request->MedicineName1==null){
            $data4=$data01.$data02;
        }
        elseif($request->MedicineName2==null){
            $data4=$data01.$data02.$data03;
        }
        elseif($request->MedicineName3==null){
            $data4=$data01.$data02.$data03.$data04;
        }
        else{
            $data4=$data01.$data02.$data03.$data04.$data05; 
        }
        $Pdata->nid=$data1;
        $Pdata->PhID=$data2;
        $Pdata->PhName=$data3;
        $Pdata->MedicineInfo=$data4;
        $Pdata->Date=$date;
        $Pdata->save();
        return redirect('/sellmedicine')->with('sell','Medicine Sold!'); 
     
      }
       public function passwordResetCode(Request $request ){

        if($data =PharmacyInfo::where('email',$request->email)->first())
        {
            if($data->email == $request->email){
                Session::put('reset','ok');
                Session::put('Phemail',$data->email);
                Session::put('PhupID',$data->id);
                
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
        return redirect('/PhCheckCode');
                
            }
        }
        else{
            return redirect('/pharmacyLogin')->with('signup','Wrong email'); 
        } 

    /////return view('pharmacy/resetPass/passowordCode');


}

public function PhCheckCode(){

    if(Session('reset')=='ok'){
        return view('pharmacy/resetPass/passowordCode');
        }
    else{
        return redirect('/pharmacyLogin');
   } 	
    
}



      public function passwordReset(Request $request ){
        if(Session('reset')=='ok'){
            if($data =DoctorCode::where('email',Session('ResetMail'))->first()){
                if(Hash::check($request->code,$data->code)){
                   
                 ///
                 return redirect('/PhShowRepass');
    
                }
                 else{
        return redirect('/PhCheckCode')->with('fail','Code Does not match '); 
           
            }
            }
    
            else{
        return redirect('/PhCheckCode')->with('fail','Code Does not match '); 
            }
            
            
            }
        
        
        
            else{
                return redirect('/pharmacyLogin');
       } 


        //return view('pharmacy/resetPass/passowordReset');
      }



      public function PhShowRepassword(){

        if(Session('reset')=='ok'){
            return view('pharmacy/resetPass/passowordReset');
            }
        else{
            return redirect('/pharmacyLogin');
       } 	
        
    }



    public function PhChangePass(Request $request){
        $this->val($request);
       
        $tdata=PharmacyInfo::find(Session('PhupID'));
        $tdata->exists = true;
        $tdata->id = Session('PhupID'); 
        $tdata->password=bcrypt($request->password);
        $tdata->save();
        session()->forget('PhupID');
        session()->forget('reset');
        return redirect('/pharmacyLogin')->with('signup','Password Successfully Changed');
    
    
    }
    
    public function val($request){
            return  $this->Validate($request, [
                  'password' => 'required|confirmed|max:255',
                  
              ]);
          }

     

}
