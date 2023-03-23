<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        return view('student.create');
    }
    public function store(Request $request){
        $request->validate([  
            'name'=>'required',  
            'phone'=>'required',  
            'email'=>'required',  
            'age'=>'required'  
        ]);  
  
        $crud = new student;  
        $crud->name =  $request->get('name');  
        $crud->phone = $request->get('phone');  
        $crud->email = $request->get('email');  
        $crud->age = $request->get('age');  
        $crud->save();

    }
}
