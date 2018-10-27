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
        return view("front.services.details", compact("details"));
    }
}
