<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\session;
class FirstController extends Controller
{
   public function MainPage()
{
    if (Auth::check()) {
        return view('Hospital.welcome');
    } else {
        return redirect()->route('login')->with('error', 'من فضلك قم بتسجيل الدخول أولاً');
    }
}
    public function AboutPage() {
        return view('Hospital.about');
    }
    public function ContactPage() {
        return view('Hospital.contact');
    }
    public function ServicesPage() {
        return view('Hospital.Services');
    }
    public function AppointmentPage() {
        return view('Hospital.appointment');
    }
    public function OurDoctorsPage() {
        return view('Hospital.Price');
    }
    public function DoctorsPage(){
        return view('Hospital.TeamOfDoctors');
    }
    
   
    public function SavePatient(request $request) {
        $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'problem' => 'required|string',
        'description' => 'required|string',
        ]);

        $patient = new Patient();
        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->problem = $request->problem;
        $patient->description = $request->description;
        $patient->save();

        return redirect()->back()->with('success', 'تم تسجيل بيانات المريض بنجاح!');
    }
    public function SaveSufferer(request $request) {
        $request->validate([
        'name_of_doctor' => 'required|string',
        'name_of_services' => 'required|string',
        'name'=> 'required|string',
        'email'=> 'required|string',
        'Appointment_date'=> 'required|string',
        'Appointment_time'=> 'required|string',  
        ]);    
        $appointment = new Appointment();
        $appointment->name_of_doctor = $request->name_of_doctor;
        $appointment->name_of_services = $request->name_of_services;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->Appointment_date = $request->Appointment_date;
        $appointment->Appointment_time = $request->Appointment_time;
        $appointment->save();

        return redirect()->back()->with('success', 'تم تسجيل بيانات المريض بنجاح!');
        
}
}