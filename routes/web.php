<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//varbar
Route::get('/',[FirstController::class,'MainPage']);
Route::get('/About',[FirstController::class,'AboutPage']);
Route::get('/Services',[FirstController::class,'ServicesPage']);
Route::get('/appointment',[FirstController::class,'AppointmentPage']);
Route::get('/Price',[FirstController::class,'OurDoctorsPage']);
//حالات المرضي والخدمات
Route::get('/contact',[FirstController::class,'ContactPage']);
Route::post('/patient',[FirstController::class,'SavePatient']);
//حجز الحالات
Route::post('/sufferer',[FirstController::class,'SaveSufferer']);


