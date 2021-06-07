<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBAIVIETSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viet', function (Blueprint $table) {
            $table->char('id', 14);
            $table->string('tieude', 50);
            $table->text('noidung');
            $table->text('tomtatnoidung')->nullable();
            $table->string('anhbia', 50);
            $table->date('ngayviet');
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
        Schema::dropIfExists('bai_viet');
    }
}
