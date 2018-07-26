<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Year;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $rows = Course::with("year")->orderBy("id", "desc")->get();        
        return view("admin.courses.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        $years = Year::orderBy("id", "desc")->get();
        return view("admin.courses.form", compact("id", "years"));
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
            "year_id" => "required",
            "logo" => "required"
        ]);

        
        $image = $request->file('logo');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $image->move($destinationPath, $logo);
 
        $update = Course::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            "image" => $logo,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            "year_id" => $request->year_id
        ]);

        if($update) {
            return redirect('/admin/courses');
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
        return Course::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $years = Year::orderBy("id", "desc")->get();
        return view("admin.courses.form", compact("id", "years"));
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
            "year_id" => "required"
        ]);

        if (isset($request->logo) && $request->logo != "") {
            $image = $request->file('logo');            
            $logo = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/images');
            $image->move($destinationPath, $logo);
        }

        $data = [];
        $data['title_ar'] = $request->title_ar;
        $data['title_en'] = $request->title_en;
        if (isset($request->logo) && $request->logo != "") {
            $data['image'] = $logo;
        }
        $data['year_id'] = $request->year_id;
        $data['content_ar'] = $request->content_ar;
        $data['content_en'] = $request->content_en;

        $update = Course::find($id)->update($data);
        if($update) {
            return redirect('/admin/courses');
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
        Course::find($id)->delete();        
    }
}
