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

//Login section start
Route::get('/doctorLogin','firstController@doctorLogin');
Route::get('/patientLogin','firstController@patientLogin');
Route::get('/pharmacyLogin','firstController@pharmacyLogin');
Route::get('/adminLogin','firstController@adminLogin');
//Login section End

//Doctor section start
Route::get('/doctorHomepage','doctorController@doctor');
Route::get('/generalPrescribe','doctorController@generalPrescribe');
Route::get('/patientHistory','doctorController@patientHistory');
//Doctor section end
//Pharma section start
Route::get('/pharmaHomepage','pharmacyController@index');
Route::get('/sellmedicine','pharmacyController@pharmaSellmedicine');
Route::get('/sellhistory','pharmacyController@pharmaSellhistory');
//Pharma section end
//Patient section start
Route::get('/prescribeHistory','patientController@prescribeHistory');
Route::get('/buyingHistory','patientController@buyingHistory');

//Patient section end

//Admin section start
Route::get('/adminHome','adminController@home');
Route::get('/addDoctor','adminController@dradd');
Route::get('/doctorList','adminController@drlist');
Route::get('/addPharmacy','adminController@pharmacyAdd');
Route::get('/pharmacyList','adminController@pharmacyList');

//Admin section end


