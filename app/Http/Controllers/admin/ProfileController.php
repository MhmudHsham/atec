<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Instructor;
use App\Material;
use App\User;
use Hash;

class ProfileController extends Controller
{
    public function index() {        
        $user_id = Auth::user()->id;
        $details = Instructor::where("user_id", $user_id)->first();
        $materials = Material::with("course")->with("course.year")->where("instructor_id", $user_id)->get();                
        return view("admin.profile.index", compact("details", "materials"));
    }

    public function update_info() {
        $user_id = Auth::user()->id;
        $details = Instructor::where("user_id", $user_id)->first();                
        return view("admin.profile.update_info", compact("details", "materials"));
    }

    public function change_password(Request $request) {
        $request->validate([
            "old_password" => "required",
            "new_password" => "required",
            "confirm_password" => "required"
        ]);
        if(!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->withError(['كلمة السر القديمة غير صحيحة']);
        }
        if($request->new_password != $request->confirm_password) {
            return redirect()->back()->withError(['كلمتا السر غير متطابقتين']);
        }
        $data = User::find(Auth::user()->id)->update([
            'password' => bcrypt($request->new_password)
        ]);

        if($data) {
            return redirect()->back()->withSuccess('تم تحديث كلمة السر بنجاح');
        }
    }

    public function update_image(Request $request) {
        $request->validate([
            "logo" => "required"
        ]);

        $image = $request->file('logo');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $image->move($destinationPath, $logo);

        $user_id = Auth::user()->id;
        $instructor_update = Instructor::where("user_id", $user_id)->update([
            "image" => $logo
        ]);
        if($instructor_update) {
            return redirect()->back()->withSuccess('تم تحديث الصورة بنجاح');
        }
    }

    public function update_data(Request $request) {        
        $request->validate([
            "name" => "required",
            "email" => "required",
            "position" => "required",
            "bio" => "required"
        ]);
        $user_id = Auth::user()->id;
        $user_update = User::find($user_id)->update([
            "name" => $request->name,
            "email" => $request->email
        ]);
        $instructor_update = Instructor::where("user_id", $user_id)->update([
            "position" => $request->position,
            "bio" => $request->bio
        ]);
        if($user_update && $instructor_update) {
            return redirect()->back()->withSuccess('تم تحديث البيانات بنجاح');
        }
    }
}
