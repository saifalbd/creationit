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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id');
            $table->string('month');
            $table->year('year');
            $table->timestamps();
        });
        Schema::create('attendance_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attendance_id');
            $table->foreignId('student_id');
            $table->string('day_number');
            $table->string('remark')->nullable();
            $table->time('entry')->nullable();
            $table->time('leave')->nullable();
            $table->boolean('attend')->nullable();
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
        Schema::dropIfExists('attendances');
    }
};
