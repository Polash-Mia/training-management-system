<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    private $courses,$course;
    public function index()
    {
        $teacher = Teacher::where("email", Auth::user()->email)->first();
        return view('teacher.course.index', compact('teacher'));
    }
    public function create(Request $request)
    {
        Course:: newCourse($request);
        return redirect('/course/add')->with('message','Course Info Create Successfully');
        
    }

    public function manage()
    {
        $teacher= Teacher::where('email', Auth::user()->email)->first();

        $this->courses  = Course::where('teacher_id',$teacher->code)->get();
        // $this->courses  = Course::all();
        return view('teacher.course.manage',['courses'=>$this->courses]);
    }

    public function edit($id)
    {
        $this->course  = Course::find($id);
        return view('teacher.course.edit',['course'=> $this->course]);
    }

    public function update(Request $request,$id)
    {
        Course::updatecourse($request,$id);
        return redirect('/course/manage')->with('message','Course Info Update Successfully');

    }

    public function delete($id)
    {
        Course::deletecourse($id);
        return redirect('/course/manage')->with('message','Course Info Delete Successfully');
    }
}
