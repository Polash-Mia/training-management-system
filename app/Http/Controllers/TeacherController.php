<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    private $teacher,$teachers;
    public function index()
    {
       
        $institute = Institute::where("email", Auth::user()->email)->first();

        return view('admin.teacher.index', compact("institute"));
    }
    public function create(Request $request)
    {
        Teacher:: newTeacher($request);
        return redirect('/teacher/add')->with('message','Teacher Info Create Successfully');
        
    }

    public function manage()
    {
        
        // $this->teachers  = Teacher::where('institute_id', Session::get('institute_id'));

        $institute = Institute::where("email", Auth::user()->email)->first();
        $this->teachers  = Teacher::where("institute_id", $institute->code )->get();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public function edit($id)
    {
        $this->teacher  = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=> $this->teacher]);
    }

    public function update(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect('/teacher/manage')->with('message','Teacher Info Update Successfully');

    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/teacher/manage')->with('message','Teacher Info Delete Successfully');
    }
}
