<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(0);
            $table->integer('teacher_id')->nullable();
            $table->integer('course_fee')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->string('sort_description');
            $table->longText('long_description');
            $table->text('image');
            $table->text('banner_image')->nullable();
            $table->string('starting_date');
            $table->string('course_duration');
            $table->text('status')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
