<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::with("year")->orderBy("id", "desc")->paginate(10);
        $count = Course::count();
        $latest_courses = Course::orderBy("id", "asc")->limit(10)->get();
        return view("front.courses.index", compact("courses", "count", "latest_courses"));
    }

    public function details($id) {
        $details = Course::find($id);
        return view("front.courses.details", compact("details"));
    }
}
