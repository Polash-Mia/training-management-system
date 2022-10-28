<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher,$image,$imageName,$directory,$imageUrl,$extension,$user;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'teacher_'.time().'.'.self::$extension;
        self::$directory ='upload/Teacher/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }

    public static function newTeacher($request)
    {
        // d/d($request);
        self::$teacher  = new Teacher();

        self::$user  = new User();

        self::$teacher->role_as =$request->role_as;
        self::$user->role_as =self::$teacher->role_as;
        self::$teacher->institute_id = $request->institute_code;
        self::$teacher->name =$request->name;
        self::$user->name =self::$teacher->name;
        self::$teacher->code =$request->code;
        self::$teacher->email =$request->email;
        self::$user->email =self::$teacher->email;
        self::$teacher->mobile =$request->mobile;
        self::$teacher->nid =$request->nid;
        self::$teacher->address =$request->address;
        self::$teacher->district =$request->district;        
        self::$teacher->password =bcrypt($request->mobile) ;
        self::$user->password =self::$teacher->password ;       
        self::$teacher->address =$request->address;
        self::$teacher->image =self::getImageUrl($request);

        self::$teacher->save();
        self::$user->save();

    }

    // public function user(){
    //     return $this->belongsTo(Institute::class);
    // }

    public static function updateTeacher($request,$id)
    {
        
        self::$teacher = Teacher::find($id);
        self::$user= User::where('email', self::$teacher->email)->first();

        if($request->file('image'))
        {
            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$teacher->image;
        }
       

       

        // self::$teacher->role_as =$request->role_as;
        // self::$user->role_as =self::$teacher->role_as;
        // self::$teacher->institute_id =Session::get('institute_id');
        self::$teacher->name =$request->name;
        self::$user->name =self::$teacher->name;
        self::$teacher->code =$request->code;
        self::$teacher->email =$request->email;
        self::$user->email =self::$teacher->email;
        self::$teacher->mobile =$request->mobile;
        self::$teacher->nid =$request->nid;
        self::$teacher->address =$request->address;
        self::$teacher->district =$request->district;        
        self::$teacher->password =bcrypt($request->mobile) ;
        self::$user->password =self::$teacher->password ;       
        self::$teacher->address =$request->address;
        self::$teacher->image =self::$imageUrl;

        self::$teacher->save();
        self::$user->save();



        // self::$teacher->name =$request->name;
        // self::$teacher->code =$request->code;
        // self::$teacher->about =$request->about;
        // self::$teacher->person =$request->person;
        // self::$teacher->mobile =$request->mobile;
        // self::$teacher->email =$request->email;
        // self::$teacher->address =$request->address;
        // self::$teacher->image =self::$imageUrl;

        // self::$teacher->save();
    }


    public static function deleteTeacher($id)
    {
        self::$teacher=Teacher::find($id);
        self::$user= User::where('email', self::$teacher->email)->first();
        if(file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
        self::$user->delete();
    }


    // public function teacher(){
    //     return $this->belongsTo(Teacher::class);
    // }
}
