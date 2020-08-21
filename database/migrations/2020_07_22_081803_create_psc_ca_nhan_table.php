<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePscCaNhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psccanhan', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_nhan_vien');
            $table->string('trong_so');
            $table->string('chi_tieu_giao');
            $table->string('thuc_hien');
            $table->string('ty_le_hoan_thanh');
            $table->string('diem_cong_viec');
            $table->string('tong_diem');
            $table->string('trang_thai');
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
        Schema::dropIfExists('psccanhan');
    }
}
