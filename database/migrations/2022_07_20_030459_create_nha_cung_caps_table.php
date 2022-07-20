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
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->increments('MACONGTY');
            $table->string('TENCONGTY')->nullable();
            $table->string('TENGIAODICH')->nullable();
            $table->string('DIACHI')->nullable();
            $table->string('DIENTHOAI')->nullable();
            $table->string('FAX')->nullable();
            $table->string('EMAIL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nha_cung_caps');
    }
};
