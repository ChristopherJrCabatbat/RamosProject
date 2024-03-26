<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function contactus(){
        return view('contactus');
    }

    public function aboutus(){
        return view('aboutus');
    }
    public function employee(){
        return view('employee');
    }

    public function grade(){
        $grade = 100;
        return view ('grade')->with('grade',$grade);
      }
     public function student($studentID = null){
    $student = array (
        array("studentID"=>"1", "fname"=>"Joseph", "middle"=>"P.", "lname"=>"Ramos", "Email"=>"Ramos@gmail.com"),
        array("studentID"=>"2", "fname"=>"Mark Ryan", "middle"=>"T.", "lname"=>"Esteban", "Email"=>"Esteban@gmail.com"),
        array("studentID"=>"3", "fname"=>"Joemel", "middle"=>"P.", "lname"=>"Suldao", "Email"=>"Suldao@gmail.com"),
        array("studentID"=>"4", "fname"=>"Erica joy", "middle"=>"DG.", "lname"=>"Balodong", "Email"=>"Balodong@gmail.com"),
        array("studentID"=>"5", "fname"=>"Arwin", "middle"=>"P.", "lname"=>"Macaraeg", "Email"=>"macaraeg@gmail.com"),
        array("studentID"=>"6", "fname"=>"Christian mark", "middle"=>"M.", "lname"=>"Dela Cruz", "Email"=>"Delacruz@gmail.com"),
        array("studentID"=>"7", "fname"=>"Christian daniel", "middle"=>"T.", "lname"=>"Nuestro", "Email"=>"Nuestro@gmail.com"),
        array("studentID"=>"8", "fname"=>"Renniel", "middle"=>"B.", "lname"=>"Resultay", "Email"=>"Resultay@gmail.com"),
        array("studentID"=>"9", "fname"=>"Ronald", "middle"=>"C.", "lname"=>"Regalado", "Email"=>"Regalado@gmail.com"),
        array("studentID"=>"10", "fname"=>"Sherwin", "middle"=> "C", "lname"=>"Paglingayen", "Email"=>"Sherwin@gmail.com")
    );

    if (!empty($studentID)) {
        $filteredStudents = array_filter($student, function($student) use ($studentID){
            return $student['studentID'] === $studentID;
        });

        if (!empty($filteredStudents)) {
            return view('student')->with('student', $filteredStudents);
        } else {
            return view('student')->with('error', 'The Data not Exist: ' . $studentID);
        }
    }

    return view('student')->with('student', $student);
}

}
