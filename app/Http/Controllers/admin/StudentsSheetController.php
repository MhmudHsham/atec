<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use Excel;
use App\Student;

class StudentsSheetController extends Controller
{
    public function index() {
        $students = Student::orderBy("id", "desc")->get();           
        return view('admin.students.index', compact('students'));
    }

    public function store() {
        if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
            })->get();       
            $students = [];
            if($data->count()) {
                foreach($data as $one) {
                    foreach($one as $item) {
                        $password = bcrypt((int)$item['code']);
                        Student::create([
                            "code" => (int) $item['code'],
                            'name' => $item['name'],
                            'password' => $password,
                            'phone' => (int) $item['phone']
                        ]);                        
                    }
                }
            }			
        }
        return redirect()->back()->with('status', 'تم تحميل قوائم الطلاب بنجاح');		
    }
}
