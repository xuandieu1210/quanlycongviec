<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongViecChinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congviecchinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_cv_chinh');
            $table->bigInteger('id_donvi');
            $table->string('trang_thai');
            $table->string('trong_so_dk');
            $table->string('don_vi_tinh');
            $table->string('thoi_gian_hoan_thanh_dk');
            $table->string('ti_le_hoan_thanh_dk');
            $table->string('trong_so_duyet');
            $table->string('don_vi_duyet');
            $table->string('thoi_gian_hoan_thanh_duyet');
            $table->string('ti_le_hoan_thanh_duyet');
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
        Schema::dropIfExists('congviecchinh');
    }
}
