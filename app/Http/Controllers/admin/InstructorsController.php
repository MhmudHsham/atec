<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instructor;
use App\Group;
use App\User;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Instructor::with("user")->orderBy("id", "desc")->get();           
        return view("admin.instructors.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        $groups = Group::orderBy("id", "desc")->get();
        return view("admin.instructors.form", compact("id", "groups"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "password" => "required",            
            "confirm_password" => "required",
            "email" => "required",
            "position" => "required",
            "bio" => "required",
            "image" => "required"
        ]);
        
        $image = $request->file('image');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $image->move($destinationPath, $logo);
 
        $user_id = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email, 
            "group_id" => $request->group_id
        ]);

        $update = Instructor::create([
            "position" => $request->position,
            "bio" => $request->bio,
            "image" => $logo,
            "user_id" => $user_id->id
        ]);

        if($update) {
            return redirect('/admin/instructors');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Instructor::find($id)->user_id;
        User::find($user_id)->delete();
        Instructor::find($id)->delete();        
    }
}
