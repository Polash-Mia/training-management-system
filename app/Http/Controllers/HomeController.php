<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    private $course,$courses;
    public function index()
    {
        $this->Gcourses=Course::where("type", 0)->get();
        $this->courses=Course::where("type", 1)->get();
        return view('website.index',[
            'Gcourses'=>$this->Gcourses,
            'courses'=>$this->courses,
        ]);
    }

    public function about()
    {
        
    

        return view('website.about');
    }

    public function course()
    {
        
        $this->courses=Course::all();
        return view('website.course',[
            
            'courses'=>$this->courses,
        ]);
        // return view('website.course');
    }

    public function detail()
    {
        return view('website.detail');
    }

    public function register()
    {
        return view('website.register');
    }

    public function contact()
    {
        return view('website.contact');
    }
}
