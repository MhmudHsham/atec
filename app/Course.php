<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['title_ar', 'title_en', 'content_ar', 'content_en', 'image', "year_id"];

    public function year() {
        return $this->belongsTo("App\Year", "year_id");
    }

    public function materials() {
        return $this->hasMany("App\Material", "course_id");
    }
}
