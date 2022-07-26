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
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->increments('MANHANVIEN');
            $table->string('HO')->nullable();
            $table->string('TEN')->nullable();
            $table->date('NGAYSINH')->nullable();
            $table->date('NGAYLAMVIEC')->nullable();
            $table->string('DIACHI')->nullable();
            $table->string('DIENTHOAI')->nullable();
            $table->double('LUONGCOBAN')->nullable();
            $table->double('PHUCAP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_viens');
    }
};
