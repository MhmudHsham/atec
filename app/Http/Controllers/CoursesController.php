<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Instructor;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::with("year")->orderBy("id", "desc")->paginate(10);
        $count = Course::count();
        $latest_courses = Course::orderBy("id", "asc")->limit(10)->get();
        return view("front.courses.index", compact("courses", "count", "latest_courses"));
    }

    public function details($id) { 
        $latest_courses = Course::orderBy("id", "asc")->limit(10)->get();       
        $details = Course::with("materials")->with("materials.instructor")->find($id);        
        try {
            $id = $details->materials[0]->instructor->id;
            $instructor_row = Instructor::where("user_id", $id)->first();            
            $instructor_data = [
                'name' => $details->materials[0]->instructor->name,
                'position' => $instructor_row->position,
                'image' => $instructor_row->image,
                'bio' => $instructor_row->bio
            ];            
        } catch(\Exception $e) {
            $instructor_data = [];
        }        
        return view("front.courses.details", compact("details", "latest_courses", "instructor_data"));
    }
}
