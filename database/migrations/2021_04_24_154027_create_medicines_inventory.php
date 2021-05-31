<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines_inventory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('medicine_id')->index();
            $table->tinyInteger('import_id')->index();
            $table->tinyInteger('amount')->index();
            $table->bigInteger('cost_per_med')->index();
            $table->bigInteger('total')->index();
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
        Schema::dropIfExists('medicines_inventory');
    }
}
