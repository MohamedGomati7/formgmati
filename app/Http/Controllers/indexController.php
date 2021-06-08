<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class indexController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function addstudent(){
        $std = new student;

        if(student::where('stdid','=', request('stdid'))->exists()){

            return redirect('/')->with('error','this id already exists. ');
        
        }else{
            
            $std->Username = request('Username');
            $std->stdid = request('stdid');
            $std->Department= request('Department');
            $std->email= request('email');
            
            $std->save();
            
            return redirect('/')->with('success','student added succussfuly');
        }
    }

}
