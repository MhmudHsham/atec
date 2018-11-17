<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Message;

class ContactusController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view("front.contact_us");
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required', 
        ]);
        if ($validator->fails()) {
            return redirect($this->_lang . "/contact-us")
                            ->withErrors($validator)
                            ->withInput();
        }

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();        
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
