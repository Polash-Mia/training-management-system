<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $role_as = Auth::user()->role_as;
        if($role_as == '1')
        {
            return view('admin.home.dashboard');
        }
        else if($role_as == '2')
        {
            $user_id=Auth::user()->id;
            $user=User::find($user_id);
            // return $user;
            $institute=Institute::where('email',$user->email)->first();
            // return $institute;
            return view('institute.home.index',['institute'=>$institute]);
        }
        else if($role_as == '3')
        {
            $user_id=Auth::user()->id;
            $user=User::find($user_id);
            $teacher=Teacher::where('email',$user->email)->first();
            return view('teacher.home.index',['teacher'=>$teacher]);
        }
        else
        {
            // redirect('/login');
        }
    }
}
