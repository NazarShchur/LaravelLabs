<?php


namespace App\Http\Controllers;


use App\Model\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    private $studentParser;

    function __construct()
    {
        $this->studentParser = new StudentParser();
    }

    function saveStudent(Request $request)
    {
        $student = $this->studentParser->parseFromRequest($request);
        $student->save();
        $id = $request->schoolId;
        return redirect("/school/$id");
    }

    function studentPage($id){
        return view('studentPage', ['student' => Student::all()->firstWhere('id', '=', $id)]);
    }

    function joinSection(Request $request)
    {
        Student::all()->firstWhere('id', '=', $request->student_id)->sections()->attach($request->section_id);
        $id = $request->student_id;
        return redirect("/student/$id");
    }
}
