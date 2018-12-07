<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;


    protected $dates = ['deleted_at'];

    protected $fillable = ['title_ar', 'title_en', 'content_ar', 'content_en', 'image', "file", "video", "course_id", "instructor_id"];
    
    public function course() {
        return $this->belongsTo("App\Course", "course_id");
    }

    public function instructor() {
        return $this->belongsTo("App\User", "instructor_id");
    }
 
}
