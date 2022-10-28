<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{

    private $institute,$institutes;
    public function index()
    {
        return view('admin.institute.index');
    }
    public function create(Request $request)
    {
        Institute:: newInstitute($request);
        return redirect('/institute/add')->with('message','Institute Info Create Successfully');
        
    }

    public function manage()
    {
        $this->institutes  = Institute::all();
        return view('admin.institute.manage',['institutes'=>$this->institutes]);
    }

    public function edit($id)
    {
        $this->institute  = Institute::find($id);
        return view('admin.institute.edit',['institute'=> $this->institute]);
    }

    public function update(Request $request,$id)
    {
        Institute::updateInstitute($request,$id);
        return redirect('/institute/manage')->with('message','Institute Info Update Successfully');

    }

    public function delete($id)
    {
        Institute::deleteInstitute($id);
        return redirect('/institute/manage')->with('message','Institute Info Delete Successfully');
    }

}
