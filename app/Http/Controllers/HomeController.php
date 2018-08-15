<?php

namespace App\Http\Controllers;

use App\Slider;

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
        return view('front.index', compact("sliders"));
    }
}
