<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    private $latest_news;

    public function __construct()
    {
        parent::__construct();
        $this->latest_news = News::orderBy('id', 'asc')->limit(10)->get();
    }

    public function index() {
        $news = News::orderBy("id", "desc")->paginate(10);
        $latest_news = $this->latest_news;
        return view("front.news.index", compact("news", "latest_news"));
    }

    public function details($id) {
        $details = News::find($id);
        $latest_news = $this->latest_news;
        return view("front.news.details", compact("details", "latest_news"));
    }
}
