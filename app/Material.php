<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;


    protected $dates = ['deleted_at'];
    
    public function course() {
        return $this->belongsTo("App\Course", "course_id");
    }
 
}
