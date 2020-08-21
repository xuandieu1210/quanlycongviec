<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePscDonViTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pscdonvi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trong_so');
            $table->string('chi_tieu_giao');
            $table->string('thuc_hien');
            $table->string('ty_le_hoan_thanh');
            $table->string('diem_cong_viec');
            $table->string('tong_diem');
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
        Schema::dropIfExists('pscdonvi');
    }
}
