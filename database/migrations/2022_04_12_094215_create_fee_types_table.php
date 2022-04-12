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
        Schema::create('fee_types', function (Blueprint $table) {
            $table->id();
            $table->integer('fee_category')->nullable();
            $table->string('f_name')->nullable();
            $table->integer('collection_id')->nullable();
            $table->integer('br_id')->nullable();
            $table->integer('seq_id')->nullable();
            $table->string('fee_type_ledger')->nullable();
            $table->string('fee_headtype')->nullable();
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
        Schema::dropIfExists('fee_types');
    }
};
