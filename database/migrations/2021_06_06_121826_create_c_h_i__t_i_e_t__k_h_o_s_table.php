<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCHITIETKHOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_kho', function (Blueprint $table) {
            $table->char('id_kho', 14);
            $table->char('id_sanpham', 14);
            $table->integer('soluongsanpham');
            $table->date('ngaysanxuat');
            $table->date('ngayhethan');
            $table->timestamps();

            $table->foreign('id_kho')->references('id')->on('kho');
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
        Schema::dropIfExists('chi_tiet_kho');
    }
}
