<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCHITIETKHUYENMAISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_khuyen_mai', function (Blueprint $table) {
            $table->char('id_khuyenmai', 14);
            $table->char('id_sanpham', 14);
            $table->integer('phantramgiam');
            $table->integer('tienduocgiam');
            $table->timestamps();

            $table->foreign('id_khuyenmai')->references('id')->on('khuyen_mai');
            $table->foreign('id_sanpham')->references('id')->on('san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_khuyen_mai');
    }
}
