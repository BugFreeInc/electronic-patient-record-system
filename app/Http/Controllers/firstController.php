<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Session;
use App\adminNotice;
use DB;
class firstController extends Controller
{
	public function contact(){
    	return view('frontEnd.home.contact');
    }
    public function storeQuary(Request $request){
        contact::create($request->all());  
        return redirect('/contact')->with('quary','Your Quary Successfully Store , We will replay you soon');

    }

    public function index(){
    	return view('frontEnd.home.homeContant');
    }
    public function doctorLogin(){
        if(Session('pass')=='ok'){
            return view('doctor.home.home');
            }
        else{
            return view('doctor.login');
       }  
    	
    
    
    }
    public function patientLogin(){
    	return view('patient.login');
    }
    public function pharmacyLogin(){
        if(Session('Ppass')=='ok'){
            return view('pharmacy.homePharma.homePharma');
            }
        else{
            return view('pharmacy.login');
       }  
    	


    	
    }
    public function adminLogin(){
    	if(Session('adminlog')=='admin'){
            $sms=contact::count();
            Session::put('sms',$sms);
            return view('admin.homeAdmin.homeAdmin');
            }
        else{
           return view('admin.login');
       }
    }
    public function notice(){

        
      $notices=adminNotice::all();
      return view('frontEnd.home.notice',['notices'=>$notices]);
       
    }
        public function noticeView($id){
      $noticeById = DB::table('admin_notices')
                
                ->select('admin_notices.*')
                ->where('admin_notices.id', $id)
                ->first();
        return view('frontEnd.home.noticeById', ['notice'=>$noticeById]);

    }
       
    
    public function about(){
        return view('frontEnd.home.about');
    }
   
}
