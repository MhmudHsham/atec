<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Setting;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $_lang;
    public $_slug;

    public function __construct() {
        $settings = Setting::pluck("setting_value", "setting_key");             
        $this->_lang = $currentLocale = app('laravellocalization')->getCurrentLocale();        
        $this->loadSlug();
        view()->share("lang", $currentLocale);
        view()->share("slug", $this->_slug);
        view()->share("settings", $settings);
    }

    
    public function loadSlug() {
        $data = array();
        $data['question'] = "question_" . $this->_lang;
        $data['answer'] = "answer_" . $this->_lang;
        $data['title'] = "title_" . $this->_lang;
        $data['description'] = "description_" . $this->_lang;
        $slug = (object) $data;
        $this->_slug = $slug;
    }
}
