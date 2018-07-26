<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['title_ar', 'title_en', 'content_ar', 'content_en', 'image'];

}
