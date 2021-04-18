<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return \view('studentList',\compact('students'));
    }
    
    public function Create(Request $req)
    {
        $student = new Student();

        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->save();
        return back()->with('success','Data added successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return \view('student',\compact('student'));
    }

    public function update(Request $req, $id)
    {
        $student = Student::find($id);

        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->save();
        return back()->with('success','Data updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back()->with('success','Data deleted successfully');
    }
}
