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
        Schema::connection('sqlsrv2')->create('AHTransactions', function (Blueprint $table) {
            $table->id();
            $table->string('img', 255);
            $table->string('item_name', 255);
            $table->string('type', 50);
            $table->bigInteger('stack');
            $table->string('message', 255);
            $table->bigInteger('points');
            $table->string('login_id', 50);
            $table->dateTime('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AHTransactions');
    }
};
