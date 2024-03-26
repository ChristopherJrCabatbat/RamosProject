<?php

namespace App\Http\Controllers;

use App\Http\Controller\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student')->with('student', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->studentId = $request->input('studentId');
        $student->fname = $request->input('fname');
        $student->mname = $request->input('mname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->contactno = $request->input('contactno');
        $student->adress = $request->input('adress');
        $student->save();
        return redirect("students")->with("message", "Student added successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('readStudent')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('editStudent')->with('students', $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->studentId = $request->studentId;
        $students->fname = $request->fname;
        $students->mname = $request->mname;
        $students->lname = $request->lname;
        $students->email = $request->email;
        $students->contactno = $request->contactno;
        $students->adress = $request->adress;
        $students->save();
        return redirect("students")->with("message", "Student updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect("students")->with("message", "Student updated successfully!");
    }
}
