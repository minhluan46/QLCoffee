<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKHACHHANGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->char('id', 14);
            $table->char('sdt',10);
            $table->char('matkhau', 150);
            $table->string('hoten', 50)->nullable();
            $table->char('email', 50)->nullable();
            $table->string('diachi',100)->nullable();
            $table->string('gioitinh', 5)->nullable();
            $table->date('ngaysinh')->nullable();
            $table->char('anhdaidien', 20)->nullable();
            $table->integer('diemtichluy');
            $table->char('id_loaikhachhang', 14);
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_loaikhachhang')->references('id')->on('loai_khach_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
