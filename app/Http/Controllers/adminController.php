<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\addingDoctor;
use App\addingPharmacy;
use App\contact;
use App\adminNotice;
use App\DoctorInfo;
use App\PharmacyInfo;
use App\PatientInfo;
use Mail;
use DB;
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
         $doctor_list= doctorinfo::all();
      return view('admin.doctorAdmin.listDoctor',['doctor_list'=>$doctor_list]);
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
              $Pharmacy_list= pharmacyinfo::all();
      return view('admin.pharmacyAdmin.phaprmacyList',['Pharmacy_list'=>$Pharmacy_list]);

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


     public function adminNoticeAdd(){
        return view('admin.notice.noticeAdd');
    }
public function adminNoticeSave(Request $request){

$this->validate($request,['noticeSubject'=>'required','noticeMassage'=>'required']);

adminNotice::create($request->all());  

return redirect('/adminNoticeAdd')->with('message','Notice save successfully');
}
 
     public function adminNoticeList(){
        
      $admin_notices=adminNotice::all();
      return view('admin.notice.noticeList',['admin_notices'=>$admin_notices]);
       
    }
    public function adminNoticeView($id){
      $noticeById = DB::table('admin_notices')
                
                ->select('admin_notices.*')
                ->where('admin_notices.id', $id)
                ->first();
        return view('admin.notice.noticeViewByid', ['notice'=>$noticeById]);

    }
        public function adminNoticeEdit($id){
       $noticeEditById=adminNotice::where('id',$id)->first();
        return view('admin.notice.noticeEditByid',['noticeEditById'=>$noticeEditById]);

    }
    public function adminNoticeUpdate(Request $request){


$adminUpdate= adminNotice::find($request->noticeId);//noticeId Edit Hidden input Name
$adminUpdate->noticeSubject=$request->noticeSubject;
$adminUpdate->noticeMassage=$request->noticeMassage;
$adminUpdate->save();
       


return redirect('/adminNoticeList')->with('message','Notice Update successfully');


    }
        public function adminNoticeDelete($id){
       // dd($request->all());
        $notyice= adminNotice::find($id);

        $notyice->delete();
return redirect('/adminNoticeList')->with('message','category info delete successfully');


    }

    public function adminMail(){
       $admin_mail=contact::all();
      return view('admin.mail.mailList',['admin_mail'=>$admin_mail]);
    
    }
    public function adminMailView($id){
      $mailById = DB::table('contacts')
                
                ->select('contacts.*')
                ->where('contacts.id', $id)
                ->first();
        return view('admin.mail.mailViewById', ['mail'=>$mailById]);

    }

    public function adminMailReplay($id){
      $mailReplayById = DB::table('contacts')
                
                ->select('contacts.*')
                ->where('contacts.id', $id)
                ->first();
        return view('admin.mail.mailReplay', ['mailreplay'=>$mailReplayById]);

    }

    public function adminMailReplaySend(Request $request){

    //mail
    $maildata=$request->toArray();
    Mail::send([],$maildata,function($massage) use ($maildata)
    {
    $massage->to($maildata['email']); 
    $massage->subject($maildata['subject']); 
    $massage->setBody("<h3>".$maildata['body']."</h3>", 'text/html');
    });
//mail
  
    contact::find($request->id)->delete();
    $sms=contact::count();
    Session::put('sms',$sms);

return redirect('/adminMail')->with('mailsent','Reply Successfully sent');


}
public function patientList(){
  if(Session('adminlog')=='admin')
    {
              $Patient_list=  patientinfo::all();
      return view('admin.patientAdmin.patientList',['Patient_list'=>$Patient_list]);

    }
    else{
       return view('admin.login');
      } 
}






}