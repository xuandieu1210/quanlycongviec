<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePscCongViecChiTietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psccongviecchitiet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tencvchitiet');
            $table->bigInteger('id_cong_viec_chinh');
            $table->bigInteger('id_nhan_vien');
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
        Schema::dropIfExists('psccongviecchitiet');
    }
}
