<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDkCongViecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dk_cong_viec', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user');
            $table->bigInteger('id_cv');
            $table->bigInteger('trang_thai');
            $table->string('hinh_anh');
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
        Schema::dropIfExists('dk_cong_viec');
    }
}
