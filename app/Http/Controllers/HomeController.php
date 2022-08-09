<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\models\Property;

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
}