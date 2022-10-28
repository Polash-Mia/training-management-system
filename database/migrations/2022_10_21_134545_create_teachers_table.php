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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            // $table->integer('course_id')->nullable();
            $table->integer('institute_id')->nullable();
            $table->tinyInteger('role_as');
            $table->string('name');
            $table->integer('code');
            $table->string('email');
            $table->integer('mobile');
            $table->integer('nid');   
            $table->string('address');        
            $table->string('district');           
            $table->string('password');           
            $table->text('image');
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
        Schema::dropIfExists('teachers');
    }
};
