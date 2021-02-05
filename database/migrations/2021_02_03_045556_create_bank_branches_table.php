<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_branches', function (Blueprint $table) {
            $table->string('branch_id')->primary();
            $table->string('bank_id');
            $table->foreign('bank_id')->references('bank_id')->on('banks');
            $table->string('branch_name');
            $table->string('branch_address');

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
        Schema::dropIfExists('bank_branches');
    }
}
