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
        Schema::create('financial_trans', function (Blueprint $table) {
            $table->id();
            $table->string('moduleid')->nullable();
            $table->string('tranid')->nullable();
            $table->string('admno')->nullable();
            $table->string('amount')->nullable();
            $table->string('crdr')->nullable();
            $table->string('tranDate')->nullable();
            $table->string('acadYear')->nullable();
            $table->string('entry_mode')->nullable();
            $table->string('voucherno')->nullable();
            $table->integer('brid')->nullable();
            $table->string('type_of_consession')->nullable();
            // $table->string('displayReceiptNo')->nullable();
            // $table->string('entrymode')->nullable();
            // $table->string('paid_date')->nullable();
            // $table->string('inactive')->nullable();
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
        Schema::dropIfExists('financial_trans');
    }
};
