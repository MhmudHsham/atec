<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::orderBy("id", "desc")->paginate(10);
        return view("front.courses.index", compact("courses"));
    }

    public function details($id) {
        $details = Course::find($id);
        return view("front.courses.details", compact("details"));
    }
}
