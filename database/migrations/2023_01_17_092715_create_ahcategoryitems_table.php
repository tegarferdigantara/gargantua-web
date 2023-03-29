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
        Schema::connection('sqlsrv2')->create('AHCategoryItems', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->bigInteger('price');
            $table->bigInteger('type');
            $table->string('description', 100);
            $table->string('img', 50);
            $table->string('category', 50);
            $table->tinyInteger('freemall');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AHCategoryItems');
    }
};
