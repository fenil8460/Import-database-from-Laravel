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
        Schema::create('common_fee_collection_headwise', function (Blueprint $table) {
            $table->id();
            $table->string('moduleId')->nullable();
            $table->string('receiptId')->nullable();
            $table->string('headId')->nullable();
            $table->string('headName')->nullable();
            $table->string('brid')->nullable();
            $table->string('amount')->nullable();
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
        Schema::dropIfExists('common_fee_collection_headwise');
    }
};
