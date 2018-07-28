<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Material;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id)
    {
        $rows = Material::with("course")->where("course_id", $course_id)->get();    
        return view("admin.materials.index", compact("rows", "course_id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        $id = 0;
        return view("admin.materials.form", compact("id", "course_id"));
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
            "title_ar" => "required",
            "title_en" => "required",            
            "content_ar" => "required",
            "content_en" => "required", 
        ]);

        
        if (isset($request->logo) && $request->logo != "") {
            $image = $request->file('logo');
            $logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images');
            $image->move($destinationPath, $logo);
        }

        if (isset($request->file) && $request->file != "") {
            $uploaded_file = $request->file('file');
            $file = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $destinationPath2 = public_path('/uploads/materials');
            $uploaded_file->move($destinationPath, $file);
        }
 
        $data = [];
        $data['title_ar'] = $request->title_ar;
        $data['title_en'] = $request->title_en;
        if (isset($request->logo) && $request->logo != "") {
            $data['image'] = $logo;
        }
        if (isset($request->file) && $request->file != "") {
            $data['file'] = $file;
        }
        $data['video'] = $request->video;
        $data['course_id'] = $course_id = $request->course_id;
        $data['content_ar'] = $request->content_ar;
        $data['content_en'] = $request->content_en;
        $data['instructor_id'] = Auth::user()->id;

        $update = Material::create($data);

        if($update) {
            return redirect('/admin/materials/'.$course_id);
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
        return Material::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course_id = Material::find($id)->course_id;
        return view("admin.materials.form", compact("id", "course_id"));
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
        $request->validate([
            "title_ar" => "required",
            "title_en" => "required",            
            "content_ar" => "required",
            "content_en" => "required", 
        ]);

        
        if (isset($request->logo) && $request->logo != "") {
            $image = $request->file('logo');
            $logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images');
            $image->move($destinationPath, $logo);
        }

        if (isset($request->file) && $request->file != "") {
            $uploaded_file = $request->file('file');
            $file = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $destinationPath2 = public_path('/uploads/materials');
            $uploaded_file->move($destinationPath, $file);
        }
 
        $data = [];
        $data['title_ar'] = $request->title_ar;
        $data['title_en'] = $request->title_en;
        if (isset($request->logo) && $request->logo != "") {
            $data['image'] = $logo;
        }
        if (isset($request->file) && $request->file != "") {
            $data['file'] = $file;
        }
        $data['video'] = $request->video;
        $data['course_id'] = $course_id = $request->course_id;
        $data['content_ar'] = $request->content_ar;
        $data['content_en'] = $request->content_en;

        $update = Material::find($id)->update($data);

        if($update) {
            return redirect('/admin/materials/'.$course_id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Material::find($id)->delete();        
    }
}
