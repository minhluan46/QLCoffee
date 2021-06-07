<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCHITIETHOADONNHAPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don_nhap', function (Blueprint $table) {
            $table->char('id_sanpham', 14);
            $table->char('id_hoadonnhap', 14);
            $table->char('id_nhacungcap', 14);
            $table->integer('soluong');
            $table->date('ngaysanxuat');
            $table->date('ngayhethan');
            $table->timestamps();
            
            $table->foreign('id_sanpham')->references('id')->on('san_pham');
            $table->foreign('id_hoadonnhap')->references('id')->on('hoa_don_nhap');
            $table->foreign('id_nhacungcap')->references('id')->on('nha_cung_cap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don_nhap');
    }
}
