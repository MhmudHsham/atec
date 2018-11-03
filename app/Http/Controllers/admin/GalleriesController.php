<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Gallery::all();             
        return view("admin.gallery.index", compact("rows"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        foreach($file as $one) {
            $destinationPath = 'public/uploads/images';
            $file_name = md5(date("Y-m-d h:i:s")) . "." .$one->getClientOriginalExtension();
            Gallery::create([
                "image" => $file_name
            ]);
            $one->move($destinationPath,$file_name);   
        }
        return redirect()->back()->with(['msg', 'Images Uploaded Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gallery::find($id)->delete();      
        return redirect()->back()->with("status", "تم حذف الصورة بنجاح");
    }
}
