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

    public function test1()
    {
        return view('test-1');
    }
    public function test2()
    {
        return view('test-2');
    }
    public function test3()
    {
        return view('test-3');
    }
    public function test4()
    {
        return view('test-4');
    }
    public function test5()
    {
        return view('test-5');
    }
    public function test6()
    {
        return view('test-6');
    }
    public function test7()
    {
        return view('test-7');
    }
    public function test8()
    {
        return view('test-8');
    }
    public function test9()
    {
        return view('test-9');
    }
    public function test10()
    {
        return view('test-10');
    }
}
