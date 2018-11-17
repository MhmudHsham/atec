<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function index() {
        $services = Service::orderBy("id", "desc")->paginate(10);
        return view("front.services.index", compact("services"));
    }

    public function details($id) {
        $details = Service::find($id);
        $latest_services = Service::orderBy("id", "asc")->limit(10)->get();
        return view("front.services.details", compact("details", "latest_services"));
    }
}
