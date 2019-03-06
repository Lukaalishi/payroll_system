<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpositions', function (Blueprint $table) {
            $table->increments('position_id');
            $table->string('position_name',1000);
            $table->string('daily_rate',1000);
            $table->string('monthly_rate',1000);
            $table->string('working_days_per_month',1000);
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
        Schema::dropIfExists('tblpositions');
    }
}
