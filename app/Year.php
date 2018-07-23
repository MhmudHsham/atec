<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Year extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at']; 

    public function courses() {
        return $this->hasMany("App\Course", "year_id");
    }
}
