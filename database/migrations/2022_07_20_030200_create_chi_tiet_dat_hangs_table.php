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
        Schema::create('chi_tiet_dat_hangs', function (Blueprint $table) {
            $table->integer('SOHOADON')->nullable();
            $table->integer('MAHANG')->nullable();
            $table->double('GIABAN')->nullable();
            $table->integer('SOLUONG')->nullable();
            $table->double('MUCGIAMGIA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_dat_hangs');
    }
};
