<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Page;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Group::withCount("users")->orderBy("id", "desc")->get();        
        return view("admin.groups.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        $pages = Page::all();
        $permissions = [];
        return view("admin.groups.form", compact("id", "permissions", "pages"));
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
            "title" => "required",
        ]);

        $update = Group::create([
            'title' => $request->title,
            'permissions' => json_encode($request->permissions), 
        ]);

        if($update) {
            return redirect('/admin/groups');
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
        return Group::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = \App\Page::all();
        $data = Group::find($id);
        $permissions = json_decode($data->permissions);
        if(!$permissions) {
            $permissions = [];
        }
        return view("admin.groups.form", compact("id", "pages", "permissions", "data"));
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
            "title" => "required",
        ]);

        $update = Group::find($id)->update([
            "title" => $request->title,
            "permissions" => json_encode($request->permissions)
        ]);
        if($update) {
            return redirect('/admin/groups');
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
        Group::find($id)->delete();
    }
}
