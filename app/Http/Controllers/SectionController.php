<?php


namespace App\Http\Controllers;


use App\Model\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function sectionPage($id){
        return view("sectionPage", ['section' => Section::all()->firstWhere('id', '=', $id)]);
    }

    public function createSection(Request $request){
        $section = new Section();
        $section->name = $request->name;
        $section->school_id = $request->school_id;
        $section->save();
        $id = $request->school_id;
        return redirect("/school/$id");
    }
}
