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
        Schema::create('common_fee_collection', function (Blueprint $table) {
            $table->id();
            $table->string('moduleId')->nullable();
            $table->string('transId')->nullable();
            $table->string('admno')->nullable();
            $table->string('rollno')->nullable();
            $table->string('amount')->nullable();
            $table->string('brId')->nullable();
            $table->string('acadamicYear')->nullable();
            $table->string('financialYear')->nullable();
            $table->string('displayReceiptNo')->nullable();
            $table->string('entrymode')->nullable();
            $table->string('paid_date')->nullable();
            $table->string('inactive')->nullable();
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
        Schema::dropIfExists('common_fee_collection');
    }
};
