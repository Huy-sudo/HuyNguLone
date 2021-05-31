<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportRevenues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_revenues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('month');
            $table->tinyInteger('year');
            $table->bigInteger('revenue')->index();
            $table->tinyInteger('user_id')->index();
            $table->tinyInteger('status')->default(1)->comment('1-active; 0-deleted; 2-inactive');

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
        Schema::dropIfExists('report_revenues');
    }
}
