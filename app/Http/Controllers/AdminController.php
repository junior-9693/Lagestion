<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_property');

    }
    public function upload(Request $request ){


        $property=new property;
        $image=$request->file;
     
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('propertyimage',$imagename);
        $property->image=$imagename;

        $property->adresse=$request->adresse;
        $property->type=$request->type;
        $property->description=$request->description;
        $property->oname=$request->name;
        $property->ophone=$request->number;
        $property->oaddress=$request->address;
        $property->oemail=$request->email;
        
     
        $property-> save();
     
        return redirect()->back()->with('message','property Added Successfully');
     
     
     }
}
