<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\college;
use App\Http\Controllers\student;
use App\Http\Controllers\teacher;


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
//admin 
//view page
Route::get('/',[college::class,'index']);
Route::get('/alogin',[college::class,'alogin']);
Route::post('/aloging',[college::class,'aloging']);
Route::get('/adminhome',[college::class,'ahome']);
Route::get('/approveteacher',[college::class,'viewteacherreg']);
Route::get('/approvesyllabus',[college::class,'viewsyllabus']);
Route::get('/approvetimetable',[college::class,'viewtimetable']);
Route::get('/approveresult',[college::class,'viewresult']);
Route::get('/adminfeedback',[college::class,'viewfeedback']);
//approve and decline
Route::get('/aprove/{id}',[college::class,'tapprove']);
Route::get('/decline/{id}',[college::class,'tdecline']);
Route::get('/saprove/{id}',[college::class,'sapprove']);
Route::get('/sdecline/{id}',[college::class,'sdecline']);
Route::get('/aprovet/{id}',[college::class,'aprovet']);
Route::get('/declinet/{id}',[college::class,'declinet']);
Route::get('/raprove/{id}',[college::class,'raprove']);
Route::get('/rdecline/{id}',[college::class,'rdecline']);
Route::get('/alogout',[college::class,'alogout']);





//student
Route::get('/register',[student::class,'reg']);
Route::get('/login',[student::class,'login']);
Route::post('/sreg',[student::class,'store']);
Route::post('/loging',[student::class,'loginaction']);
Route::get('/studenthome',[student::class,'shome']);
Route::get('/sviewsyllabus',[student::class,'sviewsyllabus']);
Route::get('/sviewnotes',[student::class,'sviewnotes']);
Route::get('/sviewtimetable',[student::class,'sviewtimetable']);
Route::get('/sviewresult',[student::class,'sviewresult']);
Route::get('/addfeedback',[student::class,'feedback']);
Route::post('/feedback',[student::class,'addfeedback']);
Route::get('/logout',[student::class,'logout']);






//teacher
//view of pages
Route::get('/tregister',[teacher::class,'treg']);
Route::get('/tlogin',[teacher::class,'tlog']);
Route::get('/teacherhome',[teacher::class,'home']);
Route::get('/uploadsyllabus',[teacher::class,'syll']);
Route::get('/uploadnotes',[teacher::class,'notes']);
Route::get('/uploadresults',[teacher::class,'result']);
Route::get('/uploadtimetable',[teacher::class,'timetable']);
Route::get('/tviewfeedback',[teacher::class,'viewfeedback']);
Route::get('/tviewsyllabus',[teacher::class,'tviewsyllabus']);
//login
Route::post('/tloging',[teacher::class,'loginaction']);
//insert into tables
Route::post('/terg',[teacher::class,'tinsert']);
Route::post('/syllabus',[teacher::class,'syllabus']);
Route::post('/note',[teacher::class,'note']);
Route::post('/results',[teacher::class,'results']);
Route::post('/timetables',[teacher::class,'timetables']);
Route::get('/tlogout',[teacher::class,'tlogout']);