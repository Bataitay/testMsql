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
        Schema::create('don_dat_hangs', function (Blueprint $table) {
            $table->increments('SOHOADON');
            $table->integer('MAKHACHHANG')->nullable();
            $table->string('MANHANVIEN')->nullable();
            $table->date('NGAYDATHANG')->nullable();
            $table->date('NGAYGIAOHANG')->nullable();
            $table->date('NGAYCHUYENHANG')->nullable();
            $table->string('NOIGIAOHANG')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_dat_hangs');
    }
};
