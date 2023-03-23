<?php

namespace App\Http\Controllers;

//use App\Models\book;
use Illuminate\Http\Request;
use App\Models\student;


class stdController extends Controller
{
   
    public function index()
    {
        $student=student::all();
        return view('student.index')->with('student',$student);
    }

    public function create()
    {
        return view('student.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha|max:20',
            'phone' => 'required|Numeric|min:10',
            'email' => 'required|email|max:20',
               'age' => 'required|Numeric',
        ]);
       $input=$request->all();
       student::create($input);
       return redirect('student')->with('flash_message','student added');

    }

    
    public function show($id)
    {
        $student=student::find($id);
        return view('student.show')->with('student',$student);
    }

    
    public function edit($id)
    {
        $student=student::find($id);
        return view('student.edit')->with('student',$student);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|alpha|max:20',
            'phone' => 'required|Numeric|min:10',
            'email' => 'required|email|max:20',
               'age' => 'required|Numeric',
        ]);
        $student=student::find($id);
        $input=$request->all();
        $student->update($input);
        return redirect('student')->with('flash-message','student updated');
    }

   
    public function destroy($id)
    {
       student::destroy($id);
        $student=student::all();
        return view('student.index')->with('student',$student);
    }
}
