<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/mon', function () {
    return view('doctor.home.home');
});*/
/*Hmoe Page*/
Route::get('/','firstController@index');
Route::get('/contact','firstController@contact');
Route::post('/saveQuary','firstController@storeQuary');
Route::get('/notice','firstController@notice');
Route::get('/about','firstController@about');


//Login section start

Route::get('/doctorLogin','firstController@doctorLogin');
Route::get('/patientLogin','firstController@patientLogin');
Route::get('/pharmacyLogin','firstController@pharmacyLogin');
Route::get('/adminLogin','firstController@adminLogin');
//Login section End

//Admin section start
Route::post('/checkadmin','adminController@logincheck');
Route::get('/adminHome','adminController@home');
Route::get('/addDoctor','adminController@dradd');
Route::post('/addingDr','adminController@saveingDoctor');
Route::get('/doctorList','adminController@drlist');
Route::get('/addPharmacy','adminController@pharmacyAdd');
Route::post('/addingPharmacy','adminController@savingPharmacy');
Route::get('/pharmacyList','adminController@pharmacyList');
Route::get('/adminLogout','adminController@logout');

//Admin section end

//Doctor section start
Route::get('/doctorHomepage','doctorController@doctor');
Route::post('/signupDr','doctorController@Signupdoctor');
Route::post('/checkDr','doctorController@checkDoctor');
Route::get('/generalPrescribe','doctorController@generalPrescribe');
Route::post('/saveprescribtion','doctorController@SavePrescribtion');
Route::get('/patientHistory','doctorController@patientHistory');
Route::get('/DrOut','doctorController@logout');
Route::post('/showPres','doctorController@ShowPatientHistory');
//Doctor section end



//Pharma section start
Route::post('/signingPharmacy','pharmacyController@SavePharma');
Route::post('/checkPharma','pharmacyController@CheckPharma');
Route::post('/ShowPresPharma','pharmacyController@ShowPatientHistory');
Route::post('/ShowMed','pharmacyController@ShowMed');
Route::post('/SellMed','pharmacyController@SellMedicine');
Route::get('/pharmaHomepage','pharmacyController@index');
Route::get('/outPharma','pharmacyController@logout');
Route::get('/sellmedicine','pharmacyController@pharmaSellmedicine');
Route::get('/sellhistory','pharmacyController@pharmaSellhistory');
//Pharma section end


//Patient section start
Route::get('/prescribeHistory','patientController@prescribeHistory');
Route::get('/buyingHistory','patientController@buyingHistory');

//Patient section end




