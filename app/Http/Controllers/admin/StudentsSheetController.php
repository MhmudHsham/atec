<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Excel;

class StudentsSheetController extends Controller
{
    public function index() {
        return view('admin.students.index');
    }

    public function store() {
        if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			foreach($data as $one) {
                
            }
		}
		return back();
    }
}
