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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->increments('MAKHACHHANG');
            $table->string('TENCONGTY')->nullable();
            $table->string('TENGIAODICH')->nullable();
            $table->string('DIACHI')->nullable();
            $table->string('EMAIL')->unique();
            $table->string('DIENTHOAI')->nullable();
            $table->string('FAX')->nullable();
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
        Schema::dropIfExists('khach_hangs');
    }
};
