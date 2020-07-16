<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Score;
use App\Student;
use App\ViewScore;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getScoreStudent()
    {
        $data = array();
        $students = Student::all();
        foreach ($students as $student) {
            $score = ViewScore::getScoreByID($student->id);
            $merge = $score->merge($student);
            $data[] = array_merge(['class' => $student->class->class_name], $merge->toArray());
        }
        return json_encode($data);
    }

    public function getStudent(Request $request)
    {
        $id = $request->id;
        $students = Student::find($id);
        return json_encode($students);
    }

    public function getClass()
    {
        $class = Classes::all();
        return json_encode($class);
    }

    public function updateStudent(Request $request)
    {
        $student = $request->student;
        Student::whereId($student['id'])->update($student);
    }

    public function updateStudentJquery(Request $request)
    {
        Student::whereId($request->id)->update($request->except('_token'));
        return "Update successful";
    }

    public function directive()
    {
        return view('demo-directive');
    }
    public function filter()
    {
        return view('demo-filter');
    }
    public function student()
    {
        return view('student');
    }

}
