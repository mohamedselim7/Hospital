<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\AllNew;
use Illuminate\Http\Request;
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//varbar
Route::get('/',[FirstController::class,'MainPage']);
Route::get('/About',[FirstController::class,'AboutPage']);
Route::get('/Services',[FirstController::class,'ServicesPage']);
Route::get('/appointment',[FirstController::class,'AppointmentPage']);
Route::get('/Price',[FirstController::class,'OurDoctorsPage']);
Route::get('/TeamOfDoctors',[FirstController::class,'DoctorsPage']);
//حالات المرضي والخدمات
Route::get('/contact',[FirstController::class,'ContactPage']);
Route::post('/patient',[FirstController::class,'SavePatient']);
//حجز الحالات
Route::post('/sufferer',[FirstController::class,'SaveSufferer']);
// اضافة طبيب جديد 
Route::get('/AddDoc',[AllNew::class,'NewDoctors']);
Route::post('/AddDoctor',[AllNew::class,'SaveDoctor']);
Route::get('/TeamOfDoctors', [AllNew::class, 'ShowDoctors']);
// التعديل والحذف
Route::get('/RemoveDoctor/{id}',[AllNew::class,'RemoveDoctor']);
Route::get('/EditDoctor/{id}',[AllNew::class,'EditDoctor']);
Route::post('/UpdateDoctor/{id}',[AllNew::class,'UpdateDoctor']);
//رأي العملاء
Route::get('/CustomerOpinion',[AllNew::class,'CustomerOpinion']);
Route::post('/YourOpinion',[AllNew::class,'SaveOpinion']);




