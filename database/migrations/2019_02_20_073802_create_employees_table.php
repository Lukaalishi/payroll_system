<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->string('fname', 500);
            $table->string('mname', 1000)->nullable();
            $table->string('lname', 1000);
            $table->string('gender', 1000);
            $table->string('phone_number', 1000);
            $table->string('email', 1000);
            $table->string('dob', 1000);
            $table->string('hire_date', 1000)->nullable();
            $table->string('status', 1000);
            $table->integer('position_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('department_id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('position_id')->references('position_id')->on('tblpositions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
