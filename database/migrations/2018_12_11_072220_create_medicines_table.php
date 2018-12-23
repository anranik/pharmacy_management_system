<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('generic_name');
            $table->integer('category_id');
            $table->string('type');
            $table->string('purchase_price');
            $table->string('sell_price');
            $table->string('total_unit');
            $table->string('current_unit');
            $table->string('inventory');
            $table->integer('manufacturer_id');
            $table->date('purchase_date');
            $table->date('effect_date');
            $table->date('expire_date');
            $table->string('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('medicines');
    }
}
