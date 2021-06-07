<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHOADONSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->char('id', 14);
            $table->date('ngaymua');
            $table->char('sdtkhachhang',10)->nullable();
            $table->string('diachikhachhang',100)->nullable();
            $table->integer('diemcongtichluy')->nullable();
            $table->integer('dongia');
            $table->integer('tienduocgiam');
            $table->integer('thanhtien');
            $table->char('id_khachhang', 14);
            $table->char('id_nhanvien',14);
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_khachhang')->references('id')->on('khach_hang');
            $table->foreign('id_nhanvien')->references('id')->on('nhan_vien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
