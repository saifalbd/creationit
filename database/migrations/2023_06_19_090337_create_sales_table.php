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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('customer_name');
            $table->foreignId('student_id')->nullable();
            $table->text('address');
            $table->string('mobile');
            $table->double('total');
            $table->double('paid')->default(0);
            $table->double('due')->default(0);
            $table->text('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id');
            $table->string('description');
            $table->string('qty');
            $table->string('rate');
            $table->string('amount');
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
        Schema::dropIfExists('sales');
    }
};
