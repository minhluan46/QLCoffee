<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCHITIETHOADONSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->char('id_hoadon', 14);
            $table->char('id_sanpham', 14);
            $table->integer('soluong');
            $table->integer('tongdongia');
            $table->integer('tongtienduocgiam');
            $table->char('tongthanhtien', 10);
            $table->timestamps();

            $table->foreign('id_hoadon')->references('id')->on('hoa_don');
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
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
}
