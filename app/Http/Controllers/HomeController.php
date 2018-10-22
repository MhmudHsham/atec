<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Service;
use App\Course;
use App\News;

class HomeController extends Controller
{

    public function __construct() {
        parent::__construct();
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::limit(4)->orderBy("id", "desc")->get();
        $courses = Course::limit(12)->orderBy("id", "desc")->get();
        $news = News::limit(6)->orderBy("id", "desc")->get();
        return view('front.index', compact("sliders", "services", "courses", "news"));
    }

    public function about_us() {
        return view("front.about_us");
    }
}
