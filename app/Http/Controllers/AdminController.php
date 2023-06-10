<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\App;

class AdminController extends Controller
{
    public function add_doctor(){
        return view('admin.add_doctor');
    }

public function upload_doctor(Request $request){
    $data=new Doctor;
    $data->name=$request->name;
    $data->phone=$request->phone;
    $data->speciality=$request->speciality;
    $data->room=$request->room;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('doctorimage', $imagename);
    $data->image=$imagename;
    $data->save();
    return redirect()->back()->with('message','Doctor Added Sucessfully');
}

public function appointment(){
    $data=App::all();
    return view('admin.appointment',compact('data'));
}

public function approved($id){
    $data = App::find($id);
    $data->status='approved';
    $data->save();
    return redirect()->back();
}
public function canceled($id){
    $data = App::find($id);
    $data->status='canceled';
    $data->save();
    return redirect()->back();
}


public function alldoctor()
{
    $data=Doctor::all();
return view('admin.alldoctor',compact('data'));

}
public function deleted($id){
    $data = Doctor::find($id);
    $data->delete();
 return redirect()->back();
}
public function update($id){
    $data=Doctor::find($id);
    return view('admin.update',compact('data'));

 }
public function edit_doctor(Request $request,$id){
    $data=Doctor::find($id);
    $data->name=$request->name;
    $data->phone=$request->phone;
    $data->speciality=$request->speciality;
    $data->room=$request->room;
    $image=$request->image;
    if($image){
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('doctorimage', $imagename);
    $data->image=$imagename;
    }
    $data->save();
    return redirect()->back();






}

}
