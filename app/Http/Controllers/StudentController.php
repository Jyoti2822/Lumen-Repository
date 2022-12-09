<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {
        //Get all data from database
        $students=student::all();
        return response()->json($students);

    }
  
    public function store(Request $request)
    {
        //Post data to database
        //validation


        $this->validate($request,[
            'name'=>'required|unique:students|min:4',
            'surname'=>'required',
            'marks'=>'required',
            'age'=>'required|min:2',
            'gender'=>'required|max:2'
        ]);
        $student_info=new student();
    
        $student_info->name=$request->input('name');
        $student_info->surname=$request->input('surname');
        $student_info->marks=$request->input('marks');
        $student_info->age=$request->input('age');
        $student_info->gender=$request->input('gender');

        $student_info->save();

        return response()->json($student_info);
    }

    public function show($id)
    {
        //give 1 student info from student table
        $student_info=student::find($id);
        return response()->json($student_info);
    }

    public function update(Request $request, $id)
    {
        //Update -ID

        $this->validate($request,[
            'name'=>'required',
            'surname'=>'required',
            'marks'=>'required',
            'age'=>'required',
            'gender'=>'required'
        ]);
        $student_info=student::find($id);
        $student_info->name=$request->input('name');
        $student_info->surname=$request->input('surname');
        $student_info->marks=$request->input('marks');
        $student_info->age=$request->input('age');
        $student_info->gender=$request->input('gender');

        $student_info->save();

        return response()->json($student_info);
    }
    public function destroy($id)
    {
        //Delete -ID
        $student_info=student::find($id);
        $student_info->delete();
        return response()->json("Student Deleted Successfully ");
    }
}
