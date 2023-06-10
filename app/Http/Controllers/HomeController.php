<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\App;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
        $data=Doctor::all();
        return view('user.home',compact('data'));
        }
    }
    
    public function redirect(){
        if (Auth::id()){
            if(Auth::user()->usertype=='0'){
                $data=Doctor::all();
              return view('user.home',compact('data'));
            }
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
        }
    }
public function app(Request $request){
    $dataa = new App;
    $dataa->name=$request->name;
    $dataa->phone=$request->phone;
    $dataa->doctor=$request->doctor;
    $dataa->date=$request->date;
    $dataa->email=$request->email;
    $dataa->message=$request->message;
    $dataa->status='In progress';
    if(Auth::id()){
    $dataa->user_id=Auth::user()->id;
    }
    $dataa->save();
    return redirect()->back()->with('message','Appointment Request Successful .We Will Contact With You Soon ');
}
 public function myapp(){
    
    if(Auth::id()){
        $user_id=Auth::user()->id;
        $app=App::where('user_id',$user_id)->get();
        return view('user.myapp',compact('app'));
    }
   else{
    return redirect()->back();
   }
}


 public function delete($id){
    $data=App::find($id);
    $data->delete();
    return redirect()->back();
 }
public function contact(){
    return view('user.contact');
}
public function blog(){
    return view('user.blog');
}

public function doctorview(){
    $data=Doctor::all();
    
    return view('user.doctorview',compact('data'));
}
 public function about(){
    $data=Doctor::all();
    return view('user.about',compact('data'));
 }

public function details(){

    return view('user.details');
}



}