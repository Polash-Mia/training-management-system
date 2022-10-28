<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class GovtcourseController extends Controller
{
    private $courses,$course;
    public function index()
    {
        return view('admin.govtcourse.index');
    }
    public function create(Request $request)
    {
        Course:: newgovCourse($request);
        return redirect('/govtcourse/add')->with('message','Course Info Create Successfully');
        
    }

    public function manage()
    {
        // $this->courses  = Course::all();
        $this->courses  = Course::where('type', 0 )->get();
        return view('admin.govtcourse.manage',['courses'=>$this->courses]);
    }

    public function edit($id)
    {
        $this->course  = Course::find($id);
        return view('admin.govtcourse.edit',['course'=> $this->course]);
    }

    public function update(Request $request,$id)
    {
        Course::updategovtcourse($request,$id);
        return redirect('/govtcourse/manage')->with('message','Course Info Update Successfully');

    }

    public function delete($id)
    {
        Course::deletegovtcourse($id);
        return redirect('/govtcourse/manage')->with('message','Course Info Delete Successfully');
    }


    // public function manageOffer()
    // {
    //     return view('admin.course.manageoffer')
    // }
}
