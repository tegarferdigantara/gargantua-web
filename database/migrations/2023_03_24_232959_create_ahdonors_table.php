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
        Schema::connection('sqlsrv2')->create('AHDonors', function (Blueprint $table) {
            $table->id();
            $table->string('gamemaster_id', 50);
            $table->integer('donor_user_id');
            $table->string('donor_login_id', 50);
            $table->integer('grade');
            $table->integer('rps_purchased');
            $table->string('name_donor', 50)->nullable();
            $table->string('socmed_donor', 255)->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AHDonors');
    }
};
