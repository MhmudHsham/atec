<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy("id", "desc")->paginate(10);
        return view("front.news.index", compact("news"));
    }

    public function details($id) {
        $details = News::find($id);
        return view("front.news.details", compact("details"));
    }
}
