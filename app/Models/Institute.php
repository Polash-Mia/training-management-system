<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Institute extends Model
{
    use HasFactory;
    private static $institute, $image, $imageName, $directory, $imageUrl, $extension, $user;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = 'Bitm_' . time() . '.' . self::$extension;
        self::$directory = 'upload/Institute/';
        self::$image->move(self::$directory, self::$imageName);

        return self::$directory . self::$imageName;
    }

    public static function newInstitute($request)
    {
        self::$institute  = new Institute();

        self::$user  = new User();

        self::$institute->role_as = $request->role_as;
        self::$user->role_as = self::$institute->role_as;
        self::$institute->name = $request->name;
        self::$user->name = self::$institute->name;
        self::$institute->code = $request->code;
        self::$institute->about = $request->about;
        self::$institute->person = $request->person;
        self::$institute->mobile = $request->mobile;
        self::$institute->password = bcrypt($request->mobile);
        self::$user->password = self::$institute->password;
        self::$institute->email = $request->email;
        self::$user->email = self::$institute->email;
        self::$institute->address = $request->address;
        self::$institute->image = self::getImageUrl($request);

        self::$institute->save();
        self::$user->save();
    }

    // public function user(){
    //     return $this->belongsTo(Institute::class);
    // }

    public static function updateInstitute($request, $id)
    {
        self::$institute = Institute::find($id);
        self::$user = User::where('email', self::$institute->email)->first();

        if ($request->file('image')) {
            if (file_exists(self::$institute->image)) {
                unlink(self::$institute->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$institute->image;
        }

        self::$institute->name = $request->name;
        self::$user->name = $request->name;
        self::$institute->code = $request->code;
        self::$institute->about = $request->about;
        self::$institute->person = $request->person;
        self::$institute->mobile = $request->mobile;
        self::$user->password = bcrypt($request->mobile);
        self::$institute->email = $request->email;
        self::$user->email = $request->email;
        self::$institute->address = $request->address;
        self::$institute->image = self::$imageUrl;

        self::$institute->save();
        self::$user->save();
    }


    public static function deleteInstitute($id)
    {
        self::$institute = Institute::find($id);
        self::$user = User::where('email', self::$institute->email)->first();
        if (file_exists(self::$institute->image)) {
            unlink(self::$institute->image);
        }
        self::$institute->delete();
        self::$user->delete();
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
