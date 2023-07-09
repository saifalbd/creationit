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
            $table->string('name');
            $table->tinyInteger('duration');
            $table->double('fee');
           
            $table->foreignId('avatar_id');
            $table->text('details')->nullable();
            $table->timestamps();
        });

        Schema::create('course-instructor', function (Blueprint $table) {
         
            $table->foreignId('course_id');
            $table->foreignId('instructor_id');
          
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
