<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Review;
class AllNew extends Controller
{
     public function NewDoctors(){
        $doctors = Doctors::all();
        return view('Hospital.AddDoc',['doctors'=> $doctors]);
    }
    public function SaveDoctor(Request $request) {
    $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'phone' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    $doctors = new Doctors();
    $doctors-> name = $request-> name;
    $doctors-> description = $request-> description;
    $doctors-> phone = $request-> phone;
    if($request->hasFile('image')) {
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('uploads/doctors'), $imageName);
    $doctors->image = 'uploads/doctors/' . $imageName;
    }
    $doctors->save();
    return redirect()->back()->with('success', 'Doctor added successfully!');
}
    public function ShowDoctors() {
        $doctors = Doctors::all();
        return view('Hospital.TeamOfDoctors', ['doctors' => $doctors]);
    }
    //الحذف
    public function RemoveDoctor($id) {
        $doctors = Doctors::findorFail($id);
        $doctors-> delete();
        return redirect()->back();
}
    public function EditDoctor($id) {
        $doctors = Doctors::findorFail($id);
        return view('Hospital.EditDoctor', ['doctors' => $doctors]);
}
    public function UpdateDoctor(Request $request, $id)
{
    $request->validate([
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'phone' => 'required|integer'
    ]);
    $doctors = Doctors::findOrFail($id);
    $doctors->name = $request->name;
    $doctors->description = $request->description;
    $doctors->phone = $request->phone;
    $doctors->save();
    return redirect()->back()->with('success', 'تم تعديل بيانات الدكتور بنجاح');
}
    public function CustomerOpinion() {
        $reviews = Review::all();
        return view('Hospital.CustomerOpinion',["reviews" => $reviews]);
    }
    public function SaveOpinion(Request $request) {
    $request->validate([
        'name' => 'required|max:255',
        'YourAge' => 'required|integer|min:1',
        'YourOpinion' => 'required|max:1000'
    ]);

    Review::create([
        'name' => $request->name,
        'YourAge' => $request->YourAge,
        'YourOpinion' => $request->YourOpinion
    ]);

    return redirect()->back()->with('success', 'تم إرسال رأيك بنجاح!');
}
}