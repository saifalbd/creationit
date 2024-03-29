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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('education')->nullable();
            $table->string('occupation');
            $table->string('mobile',15);
            $table->string('guardian_mobile',15);
            $table->string('email');
            $table->foreignId('avatar_id');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });

        Schema::create('pending_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('education')->nullable();
            $table->string('occupation');
            $table->string('mobile',15);
            $table->string('guardian_mobile',15)->nullable();
            $table->string('email');
            $table->foreignId('avatar_id');
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->foreignId('course_id');
            $table->timestamps();
        });

        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('type');
            $table->foreignId('course_id');
            $table->foreignId('batch_id');
            $table->integer('roll');
            $table->integer('registration_no');
            $table->integer('academic_year');
            $table->string('session');
            $table->double('fee');
            $table->double('discount');
            $table->double('first_ins');
            $table->date('first_ins_date')->nullable();
            $table->double('second_ins')->nullable();
            $table->date('second_ins_date')->nullable();
            $table->double('third_ins')->nullable();
            $table->date('third_ins_date')->nullable();
            $table->timestamps();
        });


        Schema::create('student_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('ref')->nullable();
            $table->string('ref_address')->nullable();
            $table->string('ref_mobile')->nullable();

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
        Schema::dropIfExists('student_courses');
        Schema::dropIfExists('student_references');
        Schema::dropIfExists('pending_students');
        Schema::dropIfExists('students');
    }
};
