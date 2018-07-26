<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = News::orderBy("id", "desc")->get();        
        return view("admin.news.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        return view("admin.news.form", compact("id"));
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

        
        $image = $request->file('logo');
        $logo = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/images');
        $image->move($destinationPath, $logo);
 
        $update = News::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            "image" => $logo,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en
        ]);

        if($update) {
            return redirect('/admin/news');
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
        return News::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        return view("admin.news.form", compact("id"));
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

        $data = [];
        $data['title_ar'] = $request->title_ar;
        $data['title_en'] = $request->title_en;
        if (isset($request->logo) && $request->logo != "") {
            $data['image'] = $logo;
        }
        $data['content_ar'] = $request->content_ar;
        $data['content_en'] = $request->content_en;

 
        $update = News::find($id)->update($data);

        if($update) {
            return redirect('/admin/news');
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
        News::find($id)->delete();        
    }
}
