<?php


namespace App\Http\Controllers;


use App\Model\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController
{
    private $schoolParser;

    public function __construct()
    {
        $this->schoolParser = new SchoolParser();
    }

    public function saveSchool(Request $request){
        $school = new School(['name' => $request->name]);
        $school->save();
        return redirect('/schools');
    }


    public function schoolPage($id){
        $school = School::all()->firstWhere('id', '=', $id);
        return view('saveStudent', ['school'=>$school]);
    }
}
