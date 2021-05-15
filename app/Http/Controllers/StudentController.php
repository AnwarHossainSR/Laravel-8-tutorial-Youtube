<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getData(){
        try{
            $students = Student::all();
            return \response([
                'students'=>$students,
                'message'=>'Success'
            ]);
        }catch(Exception $ex){
            return \response([
                'message'=>$ex->getMessage()
            ]);
        }
    }

    public function storeData(Request $request)
    {
        try{
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->user_id = $request->user_id;
            $student->save();

            return response([
                'message' => 'Student Created',
                'student' => $student
            ]);

        }catch(Exception $ex){
            return redirect([
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function updateData(Request $request , $id)
    {
        try {
            $student = Student::find($id);
            $student->name = $request->name;
            $student->email = $request->email;
            $student->address = $request->address;
            $student->user_id = $request->user_id;
            $student->update();

            return \response([
                'message'=>'Student updated',
                'student'=>$student
            ]);
        } catch (\Throwable $th) {
            return \response([
                'message'=>$th->getMessage()
            ]);
        }
    }

}
