<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title_ar");
            $table->string("title_en");
            $table->string("image");            
            $table->string("file");            
            $table->string("video");
            $table->integer("course_id")->unsigned();
            $table->foreign("course_id")->references("id")->on("courses");
            $table->text("content_ar");
            $table->text("content_en");            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
