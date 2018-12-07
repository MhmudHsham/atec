<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Service;
use App\Course;
use App\News;
use App\Subscriber;
use Illuminate\Http\Request;

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

    public function subscribe_us(Request $request) {
        $request->validate([
            "subscribe_email" => "required|email|unique:subscribers",
        ]);

        $subscribe = Subscriber::create(['subscribe_email' => $request->subscribe_email]);
        if($subscribe) {
            return response()->json(['message' => 'Subscribed successfully'], 200);
        }
        return response()->json(['message' => 'Problem in subscribe.'], 400);
    }

}
