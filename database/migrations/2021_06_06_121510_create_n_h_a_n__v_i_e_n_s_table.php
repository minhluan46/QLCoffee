<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNHANVIENSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->char('id', 14);
            $table->char('sdt',10);
            $table->char('matkhau', 150);
            $table->integer('luong');
            $table->string('hoten', 50)->nullable();
            $table->char('email', 50)->nullable();
            $table->string('diachi',100)->nullable();
            $table->string('gioitinh', 5)->nullable();
            $table->date('ngaysinh')->nullable();
            $table->char('anhdaidien', 20)->nullable();
            $table->char('id_cuahang', 14);
            $table->char('id_loainhanvien', 14);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_cuahang')->references('id')->on('cua_hang');
            $table->foreign('id_loainhanvien')->references('id')->on('loai_nhan_vien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
}
