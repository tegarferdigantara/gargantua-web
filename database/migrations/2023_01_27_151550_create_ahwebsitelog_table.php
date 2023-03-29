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
        Schema::create('AHWebsiteLog', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('login_id', 50);
            $table->integer('grade');
            $table->string('name_activity', 50);
            $table->integer('amount')->nullable();
            $table->string('to_login_id', 50)->nullable();
            $table->string('description', 255);
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
        Schema::dropIfExists('AHWebsiteLog');
    }
};
