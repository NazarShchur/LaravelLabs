<?php


namespace App\Http\Controllers;


use App\Model\Student;
use Illuminate\Http\Request;

class StudentParser
{
    public function parseFromRequest(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->firstName;
        $student->second_name = $request->secondName;
        $student->school_id = $request->schoolId;
        return $student;
    }


}
