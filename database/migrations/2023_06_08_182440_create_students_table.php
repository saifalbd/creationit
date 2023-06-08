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
            $table->string('guardian_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->date('date_of_dirth');
            $table->date('qualification')->nullable();
            $table->string('occupation');
            $table->string('mobile',15);
            $table->string('guardian_mobile',15);
            $table->string('email');
            $table->foreignId('avatar_id');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->timestamps();
        });

        Schema::create('students_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('type');
            $table->foreignId('course_id');
            $table->foreignId('batch_id');
            $table->integer('roll');
            $table->integer('registration_no');
            $table->integer('academic_year');
            $table->integer('session');
            $table->timestamps();
        });

        Schema::create('students_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->double('fee');
            $table->double('discount');
            $table->double('1st_ins');
            $table->date('1st_ins_date');
            $table->double('2nd_ins');
            $table->date('2nd_ins_date');
            $table->double('3rd_ins');
            $table->date('3rd_ins_date');
            $table->timestamps();
        });

        Schema::create('students_reference', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('ref');
            $table->string('ref_address');
            $table->string('ref_mobile');
           
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
        Schema::dropIfExists('students');
    }
};
