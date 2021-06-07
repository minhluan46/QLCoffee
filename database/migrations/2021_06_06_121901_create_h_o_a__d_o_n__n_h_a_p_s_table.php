<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHOADONNHAPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don_nhap', function (Blueprint $table) {
            $table->char('id', 14);
            $table->integer('tongtien');
            $table->char('id_nhanvien',14);
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
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
        Schema::dropIfExists('hoa_don_nhap');
    }
}
