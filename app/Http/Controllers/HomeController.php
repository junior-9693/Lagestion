<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\models\Property;
use App\models\Appointment;
class HomeController extends Controller
{
    public function redirect(){
    if (Auth::id())
    {
        if(Auth::user()->usertype=='0'){
            $property = property::all();
            
            return view ('user.home',compact('property'));
        }
        else {
            return view ('admin.home');
        }
    }
    
}
public function index()
{ if (Auth::id()) {
    return redirect('home');
    
}
else {
    $property = property::all();

    return view('user.home',compact('property'));
}
} 

public function appointment(Request $request){
    $data=new appointment;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->date=$request->date;
    $data->phone=$request->number;
    $data->message=$request->message;
    $data->property=$request->property;
    $data->status='In Progress';

    if(Auth::id())
    {
        $data->user_id=Auth::user()->id;
    }
    $data->save();

    return redirect()->back()->with('message','Appointment request Successful. We will contact you soon');
}
}