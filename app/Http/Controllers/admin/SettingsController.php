<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsController extends Controller
{
    public function index() {
        $settings = Setting::pluck("setting_value", "setting_key");
        return view("admin.settings", compact("settings"));
    }

    public function store(Request $request) {
        foreach ($request->all() as $key => $one) {
            Setting::where("setting_key", $key)->update(["setting_value" => $one]);
        }
        return redirect('admin/');
    }
}
