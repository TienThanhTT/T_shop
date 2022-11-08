<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->id('id');
            $table->string('cpu');
            $table->string('ram');
            $table->string('rom');
            $table->string('vga');
            $table->string('manhinh');
            $table->string('tinhtrang');
            $table->string('des');
            $table->string('product_id');
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
        Schema::dropIfExists('chitietsanpham');
    }
}
