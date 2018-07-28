<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['position', 'image', 'bio', 'user_id'];

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }

}
