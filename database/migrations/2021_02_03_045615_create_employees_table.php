<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('emp_id')->primary();
            $table->string('branch_id');
            $table->foreign('branch_id')->references('branch_id')->on('bank_branches');
            $table->string('emp_name');
            $table->string('emp_email');
            $table->string('emp_photo');
            $table->string('emp_address');
            $table->string('emp_password');

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
