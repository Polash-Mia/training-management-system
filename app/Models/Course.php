<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    use HasFactory; 
    
    private static $course,$image,$imageName,$directory,$imageUrl,$extension,$user;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = 'course_'.time().'.'.self::$extension;
        self::$directory ='upload/course/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }

    public static function newgovCourse($request)
    {
        self::$course  = new course();

       

        // self::$course->type =$request->type;
      
        // self::$course->teacher_id =Session::get('teacher_id');
       
        self::$course->title =$request->title;
        self::$course->subtitle =$request->subtitle;
        self::$course->sort_description =$request->sort_description;
        self::$course->long_description =$request->long_description;
         
        self::$course->starting_date =$request->starting_date;
        self::$course->course_duration =$request->course_duration;
        self::$course->image =self::getImageUrl($request);

        self::$course->save();
        

    }

    // public function user(){
    //     return $this->belongsTo(course::class);
    // }

    public static function updategovtcourse($request,$id)
    {
        self::$course = course::find($id);
        
        if($request->file('image'))
        {
            if(file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$course->image;
        }
        
        self::$course->title =$request->title;
        self::$course->subtitle =$request->subtitle;
        self::$course->sort_description =$request->sort_description;
        self::$course->long_description =$request->long_description;
         
        self::$course->starting_date =$request->starting_date;
        self::$course->course_duration =$request->course_duration;
        self::$course->image =self::$imageUrl;

        self::$course->save();

        
    }


    public static function deletegovtcourse($id)
    {
        self::$course=course::find($id);
        
        if(file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
        
    }


    public static function newCourse($request)
    {
        self::$course  = new course();

       

        self::$course->type =$request->type;
      
        // self::$course->teacher_id =Session::get('teacher_id');
       
        // self::$course->status =$request->status;
        // self::$course->teacher_id =Session::get('teacher_id');
        self::$course->teacher_id =$request->teacher_code;
        self::$course->title =$request->title;
        self::$course->subtitle =$request->subtitle;
        self::$course->sort_description =$request->sort_description;
        self::$course->long_description =$request->long_description;
         
        self::$course->starting_date =$request->starting_date;
        self::$course->course_duration =$request->course_duration;
        self::$course->course_fee =$request->course_fee;
        self::$course->image =self::getImageUrl($request);

        self::$course->save();
        

    }

    public static function updatecourse($request,$id)
    {
        self::$course = course::find($id);
        
        if($request->file('image'))
        {
            if(file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$course->image;
        }
        // self::$course->type =$request->type;
        // self::$course->teacher_id =$request->teacher_code;
        self::$course->title =$request->title;
        self::$course->subtitle =$request->subtitle;
        self::$course->sort_description =$request->sort_description;
        self::$course->long_description =$request->long_description;     
        self::$course->starting_date =$request->starting_date;
        self::$course->course_duration =$request->course_duration;
        self::$course->course_fee =$request->course_fee;
        self::$course->image =self::$imageUrl;

        self::$course->save();

        // self::$course->title =$request->title;
        // self::$course->subtitle =$request->subtitle;
        // self::$course->sort_description =$request->sort_description;
        // self::$course->long_description =$request->long_description;
         
        // self::$course->starting_date =$request->starting_date;
        // self::$course->course_duration =$request->course_duration;
        // self::$course->image =self::$imageUrl;

        // self::$course->save();

        
    }


    public static function deletecourse($id)
    {
        self::$course=course::find($id);
        
        if(file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
        
    }

}
