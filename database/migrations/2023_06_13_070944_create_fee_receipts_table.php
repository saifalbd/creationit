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

        Schema::create('fee_receipt_vouchers',function(Blueprint $table){
            $table->id();
            $table->foreignId('student_id');
            $table->double('amount');
            $table->date('date');
            $table->text('remark')->nullable();
            $table->timestamps();

        });
        
        Schema::create('fee_receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voucher_id');
            $table->foreignId('course_id');
            $table->double('amount');
            $table->date('date');
            $table->string('trx_mode');
            $table->string('trx_no')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
 
        Schema::create('fee-batch', function (Blueprint $table) {
            $table->foreignId('fee_id');
            $table->foreignId('batch_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee-batch');
        Schema::dropIfExists('fee_receipts');
        Schema::dropIfExists('fee_receipt_vouchers');
    }
};
